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

    public function make($concrete, array $parameters = [])
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
        if (isset($this->instances[$abstract])) {
            return $this->instances[$abstract];
        }
        $abstractBind = $this->getBind($abstract,$parameters);
        // If the concrete type is actually a Closure, we will just execute it and
        // hand back the results of the functions, which allows functions to be
        // used as resolvers for more fine-tuned resolution of these objects.

        $object = $this->build($abstractBind,$parameters);
        return $this->instance($abstract,$object);
    }

    /**
     * Instantiate a concrete instance of the given type.
     *
     * @param string|Closure $concrete
     * @param $parameters
     * @return mixed
     * @throws \ReflectionException
     */
    public function build($concrete,$parameters)
    {
        if ($concrete instanceof \Closure) {
            return $concrete($this, $parameters);
        }

        $reflector = new \ReflectionClass($concrete);

        if (!$reflector->isInstantiable()) {
            throw new \ReflectionException("Target [$concrete] is not instantiable.");
        }

        $constructor = $reflector->getConstructor();

        if (is_null($constructor)) {
            return new $concrete;
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
        $this->bind($abstract, $closure);
    }

    /**
     * Register a binding with the container.
     * @param string $abstract
     * @param null $concrete
     */
    public function bind(string $abstract, $concrete = null)
    {
        if (is_null($concrete)) {
            $concrete = $abstract;
        }
        if (!$concrete instanceof Closure) {
            $concrete = $this->getClosure($abstract, $concrete);
        }
        $this->bindings[$abstract] = $concrete;
    }

    /**
     * Get the Closure to be used when building a type.
     * @param string $abstract
     * @param string $concrete
     * @return Closure
     */
    protected function getClosure(string $abstract, string $concrete)
    {
        return function ($container, $parameters = []) use ($abstract, $concrete) {
            if ($abstract == $concrete) {
                return $container->build($concrete,$parameters);
            }

            return $container->make($concrete, $parameters);
        };
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