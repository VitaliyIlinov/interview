<?php

namespace app\Core\Database\Query\Grammar;

use app\Core\Database\Query\Builder;

class Grammar
{
    /**
     * The components that make up a select clause.
     *
     * @var array
     */
    protected $selectComponents = [
        'aggregate',
        'columns',
        'from',
        'joins',
        'wheres',
        'groups',
        'havings',
        'orders',
        'limit',
        'offset',
        'unions',
        'lock',
    ];

    /**
     * Compile a select query into SQL.
     *
     * @param Builder $query
     * @return string
     */
    public function compileSelect(Builder $query)
    {
        if (is_null($query->columns)) {
            $query->columns = ['*'];
        }

        return trim($this->concatenate(
            $this->compileComponents($query))
        );

    }

    /**
     * Compile the components necessary for a select clause.
     *
     * @param Builder $query
     * @return array
     */
    protected function compileComponents(Builder $query)
    {
        $sql = [];

        foreach ($this->selectComponents as $component) {
            // To compile the query, we'll spin through each component of the query and
            // see if that component exists. If it does we'll just call the compiler
            // function for the component which is responsible for making the SQL.
            if (isset($query->$component) && !is_null($query->$component)) {
                $method = 'compile' . ucfirst($component);

                $sql[$component] = $this->$method($query, $query->$component);
            }
        }

        return $sql;
    }

    /**
     * Compile the "select *" portion of the query.
     *
     * @param Builder $query
     * @param array   $columns
     * @return string|null
     */
    protected function compileColumns(Builder $query, array $columns)
    {
        if (! is_null($query->aggregate)) {
            return;
        }

        $select = $query->distinct ? 'select distinct ' : 'select ';

        return $select . $this->columnize($columns);
    }

    /**
     * Compile an exists statement into SQL.
     *
     * @param  Builder  $query
     * @return string
     */
    public function compileExists(Builder $query)
    {
        $select = $this->compileSelect($query);

        return "select exists({$select}) as {$this->wrap('exists')}";
    }

    /**
     * Get the format for database stored dates.
     *
     * @return string
     */
    public function getDateFormat()
    {
        return 'Y-m-d H:i:s';
    }

    /**
     * Compile the "from" portion of the query.
     *
     * @param Builder $query
     * @param string  $table
     * @return string
     */
    protected function compileFrom(Builder $query, $table)
    {
        return 'from ' . $this->wrap($table);
    }

    /**
     * Compile an aggregated select clause.
     *
     * @param  Builder  $query
     * @param  array  $aggregate
     * @return string
     */
    protected function compileAggregate(Builder $query, $aggregate)
    {
        $column = $this->columnize($aggregate['columns']);

        // If the query has a "distinct" constraint and we're not asking for all columns
        // we need to prepend "distinct" onto the column name so that the query takes
        // it into account when it performs the aggregating operations on the data.
        if ($query->distinct && $column !== '*') {
            $column = 'distinct '.$column;
        }

        return 'select '.$aggregate['function'].'('.$column.') as aggregate';
    }
    /**
     * Compile the "where" portions of the query.
     *
     * @param Builder $query
     * @return string
     */
    protected function compileWheres(Builder $query)
    {
        // Each type of where clauses has its own compiler function which is responsible
        // for actually creating the where clauses SQL. This helps keep the code nice
        // and maintainable since each clause has a very small method that it uses.
        if (is_null($query->wheres)) {
            return '';
        }

        // If we actually have some where clauses, we will strip off the first boolean
        // operator, which is added by the query builders for convenience so we can
        // avoid checking for the first clauses in each of the compilers methods.
        if (count($sql = $this->compileWheresToArray($query)) > 0) {
            return $this->concatenateWhereClauses($query, $sql);
        }

        return '';
    }

    /**
     * Get an array of all the where clauses for the query.
     *
     * @param Builder $query
     * @return array
     */
    private function compileWheresToArray($query)
    {
        return array_map(function ($where) use ($query) {
            return $where['boolean'] . ' ' . $this->{"where{$where['type']}"}($query, $where);
        }, $query->wheres);
    }

    /**
     * Format the where clause statements into one string.
     *
     * @param Builder $query
     * @param array   $sql
     * @return string
     */
    private function concatenateWhereClauses($query, $sql)
    {
        $conjunction = preg_replace('/and |or /i', '', implode(' ', $sql), 1);

        return "where {$conjunction}";
    }

    /**
     * Compile a basic where clause.
     *
     * @param Builder $query
     * @param array   $where
     * @return string
     */
    protected function whereBasic(Builder $query, $where)
    {
        return $this->wrap($where['column']) . ' ' . $where['operator'] . '?';
    }

    /**
     * Convert an array of column names into a delimited string.
     *
     * @param array $columns
     * @return string
     */
    public function columnize(array $columns)
    {
        return implode(', ', array_map([$this, 'wrap'], $columns));
    }

    /**
     * Wrap a value in keyword identifiers.
     *
     * @param string $value
     * @return string
     */
    public function wrap($value)
    {
        return $this->wrapValue($value);
    }

    /**
     * Wrap a single string in keyword identifiers.
     *
     * @param string $value
     * @return string
     */
    protected function wrapValue($value)
    {
        return $value === '*' ? $value : '`' . str_replace('`', '``', $value) . '`';
    }

    /**
     * Concatenate an array of segments, removing empties.
     *
     * @param array $segments
     * @return string
     */
    private function concatenate($segments)
    {
        return implode(' ', array_filter($segments, function ($value) {
            return (string)$value !== '';
        }));
    }
}
