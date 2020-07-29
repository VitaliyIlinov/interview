<?php

namespace app\Core\Database\Scheme;

use app\Core\Database\Connection;
use app\Core\Database\Scheme\Grammars\Builder;
use Closure;

class Blueprint
{
    /**
     * The table the blueprint describes.
     *
     * @var string
     */
    protected $table;


    /**
     * Create a new schema blueprint.
     *
     * @param  string  $table
     * @param  \Closure|null  $callback
     * @return void
     */
    public function __construct($table, Closure $callback = null)
    {
        $this->table = $table;

        if (! is_null($callback)) {
            $callback($this);
        }
    }

    /**
     * Execute the blueprint against the database.
     *
     * @param  Connection  $connection
     * @param  Builder  $grammar
     * @return void
     */
    public function build(Connection $connection, Builder $grammar)
    {
        foreach ($this->toSql($connection, $grammar) as $statement) {
            $connection->statement($statement);
        }
    }
}
