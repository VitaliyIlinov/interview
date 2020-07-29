<?php

namespace app\Core\Database\Scheme\Grammars;

use app\Core\Database\Connection;
use app\Core\Database\Scheme\Blueprint;
use Closure;

class Builder
{
    /**
     * The database connection instance.
     *
     * @var Connection
     */
    protected $connection;

    /**
     * The schema grammar instance.
     *
     * @var Builder
     */
    protected $grammar;


    /**
     * Create a new database Schema manager.
     *
     * @param  Connection  $connection
     * @return void
     */
    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
        $this->grammar = $connection->getSchemaBuilder();
    }

    /**
     * Create a new table on the schema.
     *
     * @param string  $table
     * @param Closure $callback
     * @return void
     */
    public function create($table, Closure $callback)
    {
        $this->build(tap($this->createBlueprint($table), function (Blueprint $blueprint) use ($callback) {
            $blueprint->create();

            $callback($blueprint);
        }));
    }

    /**
     * Execute the blueprint to build / modify the table.
     *
     * @param  Blueprint  $blueprint
     * @return void
     */
    protected function build(Blueprint $blueprint)
    {
        $blueprint->build($this->connection, $this->grammar);
    }

    /**
     * Create a new command set with a Closure.
     *
     * @param string       $table
     * @param Closure|null $callback
     * @return Blueprint
     */
    protected function createBlueprint($table, Closure $callback = null): Blueprint
    {
        return new Blueprint($table, $callback);
    }
}