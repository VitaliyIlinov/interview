<?php

namespace app\Core\Database;

use app\Core\Application;
use app\Core\Database\Connectors\ConnectorInterface;
use app\Core\Database\Connectors\MySqlConnector;

class ConnectionFactory
{
    /**
     * The IoC container instance.
     *
     * @var Application $application
     */
    private $application;

    /**
     * Create a new connection factory instance.
     *
     * @param Application $application
     * @return void
     */
    public function __construct(Application $application)
    {
        $this->application = $application;
    }

    /**
     * Establish a PDO connection based on the configuration.
     *
     * @param array  $config
     * @return Connection
     */
    public function make(array $config): Connection
    {
        return $this->createSingleConnection($config);
    }

    /**
     * Create a single database connection instance.
     *
     * @param array $config
     * @return Connection
     */
    private function createSingleConnection(array $config): Connection
    {
        $pdo = $this->createPdoResolver($config);

        return $this->createConnection(
            $config['driver'], $pdo, $config['database'], $config
        );
    }

    /**
     * Create a new Closure that resolves to a PDO instance with a specific host or an array of hosts.
     *
     * @param array $config
     * @return \Closure
     */
    private function createPdoResolver(array $config)
    {
        return function () use ($config) {
            return $this->createConnector($config)->connect($config);
        };
    }
    /**
     * Create a connector instance based on the configuration.
     *
     * @param  array  $config
     * @return ConnectorInterface
     *
     * @throws \InvalidArgumentException
     */
    private function createConnector(array $config): ConnectorInterface
    {
        if (!isset($config['driver'])) {
            throw new \InvalidArgumentException('A driver must be specified.');
        }

        switch ($config['driver']) {
            case 'mysql':
                return new MySqlConnector;
        }

        throw new \InvalidArgumentException("Unsupported driver [{$config['driver']}]");
    }

    /**
     * Create a new connection instance.
     *
     * @param string        $driver
     * @param \PDO|\Closure $connection
     * @param string        $database
     * @param array         $config
     * @return Connection
     * @throws \InvalidArgumentException
     */
    private function createConnection(
        string $driver,
        \Closure $connection,
        string $database,
        array $config = []
    ): Connection {
        switch ($driver) {
            case 'mysql':
                return new MySqlConnection($connection, $database, $config);
        }

        throw new \InvalidArgumentException("Unsupported driver [{$driver}]");
    }
}