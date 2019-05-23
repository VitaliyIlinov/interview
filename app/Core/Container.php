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

        // If the type is not instantiable, the developer is attempting to resolve
        // an abstract type such as an Interface or Abstract Class and there is
        // no binding registered for the abstractions so we need to bail out.
        if (!$reflector->isInstantiable()) {
            throw new \ReflectionException("Target [$abstract] is not instantiable.");
        }

        $constructor = $reflector->getConstructor();

        // If there are no constructors, that means there are no dependencies then
        // we can just resolve the instances of the objects right away, without
        // resolving any other types or dependencies out of these containers.
        if (is_null($constructor)) {
            return new $abstract;
        }

        $dependencies = $constructor->getParameters();

        // Once we have all the constructor's parameters we can create each of the
        // dependency instances and then use the reflection instances to make a
        // new instance of this class, injecting the created dependencies in.
//        $instances = $this->resolveDependencies(
//            $dependencies
//        );

        return $reflector->newInstanceArgs($parameters);
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