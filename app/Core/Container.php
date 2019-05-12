<?php

namespace app\Core;

use Closure;
use ReflectionClass;

class Container
{
    /**
     * Instantiate a concrete instance of the given type.
     *
     * @param string $concrete
     * @param array $parameters
     * @return mixed
     *
     * @throws \ReflectionException
     */
    public function make($concrete, $parameters = [])
    {
        // If the concrete type is actually a Closure, we will just execute it and
        // hand back the results of the functions, which allows functions to be
        // used as resolvers for more fine-tuned resolution of these objects.
        if ($concrete instanceof Closure) {
            return $concrete($this, $parameters);
        }

        $reflector = new ReflectionClass($concrete);

        // If the type is not instantiable, the developer is attempting to resolve
        // an abstract type such as an Interface or Abstract Class and there is
        // no binding registered for the abstractions so we need to bail out.
        if (!$reflector->isInstantiable()) {
            throw new \ReflectionException("Target [$concrete] is not instantiable.");
        }

        $constructor = $reflector->getConstructor();

        // If there are no constructors, that means there are no dependencies then
        // we can just resolve the instances of the objects right away, without
        // resolving any other types or dependencies out of these containers.
        if (is_null($constructor)) {
            return new $concrete;
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
}