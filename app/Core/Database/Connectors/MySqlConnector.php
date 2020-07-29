<?php

namespace app\Core\Database\Connectors;

use PDO;

class MySqlConnector implements ConnectorInterface
{
    /**
     * The default PDO connection options.
     *
     * @var array
     */
    protected $options = [
        PDO::ATTR_CASE              => PDO::CASE_NATURAL,
        PDO::ATTR_ERRMODE           => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_ORACLE_NULLS      => PDO::NULL_NATURAL,
        PDO::ATTR_STRINGIFY_FETCHES => false,
        PDO::ATTR_EMULATE_PREPARES  => false,
    ];

    /**
     * Establish a database connection.
     *
     * @param  array  $config
     * @return \PDO
     */
    public function connect(array $config): PDO
    {
        $dsn = $this->getHostDsn($config);

        $options = $this->getOptions($config);

        $connection = $this->createConnection($dsn, $config, $options);

        if (!empty($config['database'])) {
            $connection->exec("use `{$config['database']}`;");
        }

        $this->configureEncoding($connection, $config);

        $this->configureTimezone($connection, $config);

        return $connection;
    }

    /**
     * Set the connection character set and collation.
     *
     * @param \PDO  $connection
     * @param array $config
     * @return PDO|bool
     */
    private function configureEncoding(PDO $connection, array $config)
    {
        if (!isset($config['charset'])) {
            return $connection;
        }

        $connection->prepare(
            "set names '{$config['charset']}'" . $this->getCollation($config)
        )->execute();
    }

    /**
     * Set the timezone on the connection.
     *
     * @param \PDO  $connection
     * @param array $config
     * @return void
     */
    private function configureTimezone($connection, array $config): void
    {
        if (isset($config['timezone'])) {
            $connection->prepare('set time_zone="' . $config['timezone'] . '"')->execute();
        }
    }

    /**
     * Get the collation for the configuration.
     *
     * @param array $config
     * @return string
     */
    private function getCollation(array $config)
    {
        return isset($config['collation']) ? " collate '{$config['collation']}'" : '';
    }

    /**
     * Create a new PDO connection.
     *
     * @param string $dsn
     * @param array  $config
     * @param array  $options
     * @return PDO
     */
    public function createConnection(string $dsn, array $config, array $options): PDO
    {
        [$username, $password] = [
            $config['username'] ?? null,
            $config['password'] ?? null,
        ];

        return $this->createPdoConnection(
            $dsn, $username, $password, $options
        );
    }

    /**
     * Create a new PDO connection instance.
     *
     * @param string $dsn
     * @param string $username
     * @param string $password
     * @param array  $options
     * @return \PDO
     */
    protected function createPdoConnection(string $dsn, ?string $username, ?string $password, array $options): PDO
    {
        return new PDO($dsn, $username, $password, $options);
    }

    /**
     * Get the PDO options based on the configuration.
     *
     * @param array $config
     * @return array
     */
    public function getOptions(array $config)
    {
        $options = $config['options'] ?? [];

        return array_diff_key($this->options, $options) + $options;
    }

    /**
     * Get the DSN string for a host / port configuration.
     *
     * @param array $config
     * @return string
     */
    protected function getHostDsn(array $config)
    {
        extract($config, EXTR_SKIP);

        return isset($port)
            ? "mysql:host={$host};port={$port};dbname={$database}"
            : "mysql:host={$host};dbname={$database}";
    }
}