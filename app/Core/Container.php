<?php

namespace app\Core;

use app\Core\Container as ContainerContract;
use ArrayAccess;
use Closure;

class Container implements ArrayAccess
{
    /**
     * The current globally available container (if any).
     *
     * @var static
     */
    protected static $instance = null;

    /**
     * The container's shared instances.
     *
     * @var object[]
     */
    protected $instances = [];

    /**
     * The registered type aliases.
     *
     * @var string[]
     */
    protected $aliases = [];

    /**
     * The container's bindings.
     *
     * @var array[]
     */
    protected $bindings = [];

    /**
     * Set the globally available instance of the container.
     *
     * @return static
     */
    public static function getInstance()
    {
        if (is_null(static::$instance)) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    /**
     * Set the shared instance of the container.
     * @param Container|null $container
     * @return Container
     */
    public static function setInstance(ContainerContract $container = null)
    {
        return static::$instance = $container;
    }

    public function make($concrete, $parameters = [])
    {
        return $this->resolve($concrete, $parameters);
    }

    /**
     * Instantiate a concrete instance of the given type.
     * @param $abstract
     * @param array $parameters
     * @return mixed|object
     * @throws \ReflectionException
     */
    public function resolve($abstract, $parameters = [])
    {
        $abstractBind = $this->getBind($abstract);
        // If the concrete type is actually a Closure, we will just execute it and
        // hand back the results of the functions, which allows functions to be
        // used as resolvers for more fine-tuned resolution of these objects.
        if ($abstractBind instanceof \Closure) {
            return $this->instances[$abstract] = $abstractBind($this, $parameters);
        }

        $reflector = new \ReflectionClass($abstract);

        if (!$reflector->isInstantiable()) {
            throw new \ReflectionException("Target [$abstract] is not instantiable.");
        }

        $constructor = $reflector->getConstructor();

        if (is_null($constructor)) {
            return new $abstract;
        }

        $dependencies = [];

        foreach ($constructor->getParameters() as $parameter) {
            if (!is_null($parameter->getClass())) {
                $dependencies[] = $this->make($parameter->getClass()->name);
            }
        }

        return $reflector->newInstanceArgs($dependencies);
    }

    /**
     * Register an existing instance as shared in the container.
     *
     * @param string $abstract
     * @param mixed $instance
     * @return mixed
     */
    public function instance($abstract, $instance)
    {
        $this->instances[$abstract] = $instance;

        return $instance;
    }

    /**
     * Register binding in the container.
     *
     * @param string $abstract
     * @param \Closure|string|null $closure
     * @return void
     */
    public function singleton(string $abstract, $closure = null)
    {
        if (!$closure instanceof Closure) {
            $closure = function ($container, $parameters = []) use ($abstract, $closure) {
                return $container->make(
                    $closure, $parameters
                );
            };
        }
        $this->bindings[$abstract] = $closure;
    }

    /**
     * Get the bindings.
     *
     * @param string $abstract
     * @return mixed
     */
    protected function getBind(string $abstract)
    {
        if (!isset($this->bindings[$abstract])) {
            return $abstract;
        }
        return $this->bindings[$abstract];
    }

    /**
     * Get the alias for an abstract if available.
     *
     * @param string $abstract
     * @return string
     */
    public function getAlias($abstract)
    {
        if (!isset($this->aliases[$abstract])) {
            return $abstract;
        }
        return $this->aliases[$abstract];
    }

    public function offsetExists($key)
    {
        // TODO: Implement offsetExists() method.
    }

    public function offsetGet($key)
    {
        return $this->make($key);
    }

    public function offsetSet($key, $value)
    {
        // TODO: Implement offsetSet() method.
    }

    public function offsetUnset($key)
    {
        // TODO: Implement offsetUnset() method.
    }
}