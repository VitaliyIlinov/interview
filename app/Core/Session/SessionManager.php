<?php

namespace app\Core\Session;

use app\Core\Application;
use app\helpers\Str;
use InvalidArgumentException;
use SessionHandlerInterface;

/**
 * Class SessionManager
 * @package app\Core\Session
 * @mixin Store
 */
class SessionManager
{
    /**
     * The array of created "drivers".
     *
     * @var array
     */
    protected $drivers = [];

    /**
     * @var Application
     */
    private $app;

    /**
     * SessionManager constructor.
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * Get a driver instance.
     *
     * @param string $driver
     * @return Store
     *
     * @throws InvalidArgumentException
     */
    public function driver($driver = null): Store
    {
        $driver = $driver ?: $this->getDefaultDriver();

        if (is_null($driver)) {
            throw new InvalidArgumentException(sprintf(
                'Unable to resolve NULL driver for [%s].', static::class
            ));
        }

        // If the given driver has not been created before, we will create the instances
        // here and cache it so we can return it next time very quickly. If there is
        // already a driver created by this name, we'll just return that instance.
        if (!isset($this->drivers[$driver])) {
            $this->drivers[$driver] = $this->createDriver($driver);
        }

        return $this->drivers[$driver];
    }

    /**
     * Create a new driver instance.
     *
     * @param string $driver
     * @return Store
     *
     * @throws InvalidArgumentException
     */
    protected function createDriver($driver): Store
    {
        // First, we will determine if a custom driver creator exists for the given driver and
        // if it does not we will check for a creator method for the driver. Custom creator
        // callbacks allow developers to build their own "drivers" easily using Closures.

        $method = 'create' . Str::studly($driver) . 'Driver';

        if (method_exists($this, $method)) {
            return $this->$method();
        }
        throw new InvalidArgumentException("Driver [$driver] not supported.");
    }

    /**
     * Create an instance of the file session driver.
     *
     */
    protected function createFileDriver(): Store
    {
        $lifetime = $this->getSessionConfig()['lifetime'];

        return $this->buildSession(new FileSessionHandler(
            $this->app['Files'], $this->getSessionConfig()['files'], $lifetime
        ));
    }

    protected function buildSession(SessionHandlerInterface $handler): Store
    {
        return new Store($this->getSessionConfig()['cookie'], $handler);
    }

    /**
     * Get the session configuration.
     *
     * @return array
     */
    public function getSessionConfig()
    {
        return $this->app['config']['session'];
    }

    /**
     * Get the default session driver name.
     *
     * @return string
     */
    public function getDefaultDriver()
    {
        return $this->getSessionConfig()['driver'];
    }

    /**
     * Set the default session driver name.
     *
     * @param string $name
     * @return void
     */
    public function setDefaultDriver($name)
    {
        $this->getSessionConfig()['driver'] = $name;
    }

    /**
     * Dynamically call the default driver instance.
     *
     * @param  string  $method
     * @param  array   $parameters
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        return $this->driver()->$method(...$parameters);
    }
}