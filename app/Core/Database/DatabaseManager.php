<?php

namespace app\Core\Database;

use app\Core\Application;
use app\helpers\Arr;
use InvalidArgumentException;

/**
 * Class DatabaseManager
 *
 * @package app\Core\Database
 * @mixin Connection
 */
class DatabaseManager
{
    /**
     * @var Application
     */
    private $app;

    /**
     * The active connection instances.
     *
     * @var array
     */
    private $connections = [];

    /**
     * @var ConnectionFactory
     */
    private $factory;

    /**
     * DatabaseManager constructor.
     *
     * @param Application       $application
     * @param ConnectionFactory $factory
     */
    public function __construct(Application $application, ConnectionFactory $factory)
    {
        $this->app = $application;
        $this->factory = $factory;
    }

    /**
     * Get a database connection instance.
     *
     * @param string $name
     * @return Connection
     */
    public function connection($name = null): Connection
    {
        $name = $name ?: $this->getDefaultConnection();

        // If we haven't created this connection, we'll create it based on the config
        // provided in the application. Once we've created the connections we will
        // set the "fetch mode" for PDO which determines the query return types.
        if (!isset($this->connections[$name])) {
            $this->connections[$name] = $this->configure(
                $this->makeConnection($name)
            );
        }

        return $this->connections[$name];
    }

    /**
     * Prepare the database connection instance.
     *
     * @param Connection $connection
     * @return Connection
     */
    private function configure(Connection $connection): Connection
    {
        $connection->setEventDispatcher($this->app['events']);

        return $connection;

    }

    /**
     * Make the database connection instance.
     *
     * @param string $name
     * @return Connection
     */
    private function makeConnection(string $name): Connection
    {
        $config = $this->configuration($name);

        return $this->factory->make($config, $name);
    }

    /**
     * Get the configuration for a connection.
     *
     * @param string $name
     * @return array
     * @throws InvalidArgumentException
     */
    private function configuration(string $name)
    {
        $connections = $this->getConnections();

        if (is_null($config = Arr::get($connections, $name))) {
            throw new InvalidArgumentException("Database [{$name}] not configured.");
        }

        return $config;
    }

    /**
     * Get the default connection name.
     */
    private function getDefaultConnection(): string
    {
        return $this->app['config']['database.default'];
    }

    /**
     * Get all connections.
     */
    private function getConnections(): array
    {
        return $this->app['config']['database.connections'];
    }

    /**
     * Dynamically pass methods to the default connection.
     *
     * @param string $method
     * @param array  $parameters
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        return $this->connection()->$method(...$parameters);
    }
}