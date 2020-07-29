<?php

namespace app\Core\Database\Query;

use app\Core\Database\Connection;
use app\Core\Database\Query\Grammar\Grammar;
use app\helpers\Arr;
use Closure;
use InvalidArgumentException;

class Builder
{
    /**
     * Indicates if the query returns distinct results.
     *
     * @var bool
     */
    public $distinct = false;


    /**
     * The database connection instance.
     *
     * @var Connection
     */
    public $connection;

    /**
     * All of the available clause operators.
     *
     * @var array
     */
    public $operators = [
        '=',
        '<',
        '>',
        '<=',
        '>=',
        '<>',
        '!=',
        '<=>',
        'like',
        'like binary',
        'not like',
        'ilike',
        '&',
        '|',
        '^',
        '<<',
        '>>',
        'rlike',
        'regexp',
        'not regexp',
        '~',
        '~*',
        '!~',
        '!~*',
        'similar to',
        'not similar to',
        'not ilike',
        '~~*',
        '!~~*',
    ];

    /**
     * The current query value bindings.
     *
     * @var array
     */
    public $bindings = [
        'select' => [],
        'from'   => [],
        'join'   => [],
        'where'  => [],
        'having' => [],
        'order'  => [],
        'union'  => [],
    ];

    /**
     * The table which the query is targeting.
     *
     * @var string
     */
    public $from;

    /**
     * The where constraints for the query.
     *
     * @var array
     */
    public $wheres = [];

    /**
     * An aggregate function and column to be run.
     *
     * @var array
     */
    public $aggregate;

    /**
     * The columns that should be returned.
     *
     * @var array
     */
    public $columns;

    /**
     * The database query grammar instance.
     *
     * @var Grammar
     */
    public $grammar;

    /**
     * Builder constructor.
     *
     * @param Connection $connection
     * @param Grammar    $grammar
     */
    public function __construct(Connection $connection, Grammar $grammar)
    {
        $this->connection = $connection;
        $this->grammar = $grammar;
    }

    /**
     * Set the table which the query is targeting.
     *
     * @param string $table
     * @return $this
     */
    public function from($table)
    {
        $this->from = $table;

        return $this;
    }


    /**
     * Force the query to only return distinct results.
     *
     * @return $this
     */
    public function distinct()
    {
        $this->distinct = true;

        return $this;
    }


    /**
     * Set the columns to be selected.
     *
     * @param array|mixed $columns
     * @return $this
     */
    public function select($columns = ['*'])
    {
        $this->columns = is_array($columns) ? $columns : func_get_args();

        return $this;
    }

    /**
     * Retrieve the "count" result of the query.
     *
     * @param  string  $columns
     * @return int
     */
    public function count($columns = '*')
    {
        return (int) $this->aggregate(__FUNCTION__, Arr::wrap($columns));
    }
    /**
     * Retrieve the minimum value of a given column.
     *
     * @param  string  $column
     * @return mixed
     */
    public function min($column)
    {
        return $this->aggregate(__FUNCTION__, [$column]);
    }
    /**
     * Retrieve the maximum value of a given column.
     *
     * @param  string  $column
     * @return mixed
     */
    public function max($column)
    {
        return $this->aggregate(__FUNCTION__, [$column]);
    }
    /**
     * Retrieve the sum of the values of a given column.
     *
     * @param  string  $column
     * @return mixed
     */
    public function sum($column)
    {
        $result = $this->aggregate(__FUNCTION__, [$column]);

        return $result ?: 0;
    }
    /**
     * Retrieve the average of the values of a given column.
     *
     * @param  string  $column
     * @return mixed
     */
    public function avg($column)
    {
        return $this->aggregate(__FUNCTION__, [$column]);
    }
    /**
     * Execute a query for a single record by ID.
     *
     * @param  int    $id
     * @param  array  $columns
     * @return mixed|static
     */
    public function find($id, $columns = ['*'])
    {
        return $this->where('id', '=', $id)->get($columns);
    }
    /**
     * Execute an aggregate function on the database.
     *
     * @param  string  $function
     * @param  array   $columns
     * @return mixed
     */
    private function aggregate($function, $columns = ['*'])
    {
        $results = $this->setAggregate($function, $columns)
            ->get($columns);

        return array_change_key_case((array) $results[0])['aggregate'];

    }

    /**
     * Set the aggregate property without running the query.
     *
     * @param  string  $function
     * @param  array  $columns
     * @return $this
     */
    private function setAggregate($function, $columns)
    {
        $this->aggregate = compact('function', 'columns');

        return $this;
    }

    /**
     * Add a basic where clause to the query.
     *
     * @param string|array|Closure $column
     * @param mixed                $operator
     * @param mixed                $value
     * @param string               $boolean
     * @return $this
     */
    public function where($column, $operator = null, $value = null, $boolean = 'and')
    {
        // Here we will make some assumptions about the operator. If only 2 values are
        // passed to the method, we will assume that the operator is an equals sign
        // and keep going. Otherwise, we'll require the operator to be passed in.
        [$value, $operator] = $this->prepareValueAndOperator(
            $value, $operator, func_num_args() === 2
        );

        // Now that we are working with just a simple query we can put the elements
        // in our array and add the query binding to our array of bindings that
        // will be bound to each SQL statements when it is finally executed.
        $type = 'Basic';

        $this->wheres[] = compact(
            'type', 'column', 'operator', 'value', 'boolean'
        );

        $this->addBinding($value, 'where');

        return $this;
    }

    /**
     * Add an "or where" clause to the query.
     *
     * @param  string|array|Closure  $column
     * @param  mixed  $operator
     * @param  mixed  $value
     * @return Builder|static
     */
    public function orWhere($column, $operator = null, $value = null)
    {
        [$value, $operator] = $this->prepareValueAndOperator(
            $value, $operator, func_num_args() === 2
        );

        return $this->where($column, $operator, $value, 'or');
    }

    /**
     * Execute the query as a "select" statement.
     *
     * @param  array  $columns
     * @return mixed
     */
    public function get($columns = ['*'])
    {
        return $this->onceWithColumns($columns, function () {
            return $this->runSelect();
        });
    }
    /**
     * Run the query as a "select" statement against the connection.
     *
     * @return array
     */
    protected function runSelect()
    {
        return $this->connection->select(
            $this->toSql(), $this->getBindings()
        );
    }
    /**
     * Get the SQL representation of the query.
     *
     * @return string
     */
    public function toSql()
    {
        return $this->grammar->compileSelect($this);
    }

    /**
     * Determine if any rows exist for the current query.
     *
     * @return bool
     */
    public function exists()
    {
        $results = $this->connection->select(
            $this->grammar->compileExists($this), $this->getBindings()
        );

        // If the results has rows, we will get the row and see if the exists column is a
        // boolean true. If there is no results for this query we will return false as
        // there are no rows for this query at all and we can return that info here.
        if (isset($results[0])) {
            $results = (array) $results[0];

            return (bool) $results['exists'];
        }

        return false;
    }

    /**
     * Determine if no rows exist for the current query.
     *
     * @return bool
     */
    public function doesntExist()
    {
        return ! $this->exists();
    }

    /**
     * Flatten a multi-dimensional array into a single level.
     *
     * @return array
     */
    public function getBindings()
    {
        $result = [];

        foreach ($this->bindings as $item) {

            $result = array_merge($result, array_values($item));
        }

        return $result;
    }

    /**
     * Execute the given callback while selecting the given columns.
     *
     * After running the callback, the columns are reset to the original value.
     *
     * @param  array  $columns
     * @param  Callable  $callback
     * @return mixed
     */
    private function onceWithColumns($columns, Callable $callback)
    {
        $original = $this->columns;

        if (is_null($original)) {
            $this->columns = $columns;
        }

        $result = $callback();

        $this->columns = $original;

        return $result;
    }
    /**
     * Add a binding to the query.
     *
     * @param mixed  $value
     * @param string $type
     * @return $this
     * @throws InvalidArgumentException
     */
    private function addBinding($value, $type = 'where')
    {
        if (!array_key_exists($type, $this->bindings)) {
            throw new InvalidArgumentException("Invalid binding type: {$type}.");
        }

        $this->bindings[$type][] = $value;

        return $this;
    }

    /**
     * Prepare the value and operator for a where clause.
     *
     * @param string $value
     * @param string $operator
     * @param bool   $useDefault
     * @return array
     * @throws InvalidArgumentException
     */
    private function prepareValueAndOperator($value, $operator, $useDefault = false)
    {
        if ($useDefault) {
            return [$operator, '='];
        } elseif (!$this->isValidOperator($operator)) {
            throw new InvalidArgumentException('Illegal operator and value combination.');
        }

        return [$value, $operator];
    }

    /**
     * Determine if the given operator is legal.
     *
     * @param string $operator
     * @return bool
     */
    private function isValidOperator($operator)
    {
        return !in_array($operator, $this->operators);
    }
}
