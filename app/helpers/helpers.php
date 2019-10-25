<?php

use app\Core\Application;
use app\Core\Container;
use app\Core\Bootstrap\LoadEnvironmentVariables;
use app\Core\View\View;

if (!function_exists('app')) {
    /**
     * Get the available container instance.
     *
     * @param string|null $make
     * @param array $parameters
     * @return Application|Container
     */
    function app($make = null, array $parameters = [])
    {
        if (is_null($make)) {
            return Container::getInstance();
        }

        return Container::getInstance()->make($make, $parameters);
    }
}

if (!function_exists('view')) {
    /**
     * Get the evaluated view contents for the given view.
     *
     * @param string $view
     * @param array $data
     * @param string $layout
     * @return View
     */
    function view(string $view, array $data = [], string $layout = 'base'): View
    {
        $abstract = app('view');

        if (func_num_args() === 0) {
            return $abstract;
        }

        return $abstract->make($view, $data, $layout);
    }
}

if (!function_exists('config')) {
    /**
     * Get / set the specified configuration value.
     *
     * If an array is passed as the key, we will assume you want to set an array of values.
     *
     * @param array|string|null $key
     * @param mixed $default
     * @return mixed
     */
    function config($key = null, $default = null)
    {
        if (is_null($key)) {
            return app('config');
        }

        if (is_array($key)) {
            return app('config')->set($key);
        }

        return app('config')->get($key, $default);
    }
}

if (!function_exists('env')) {
    /**
     * Gets the value of an environment variable.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    function env($key, $default = null)
    {
        return LoadEnvironmentVariables::getEnvironmentVariable($key, $default);
    }
}

if (!function_exists('resource_path')) {
    /**
     * Get the path to the resources folder.
     *
     * @param string $path
     * @return string
     */
    function resource_path(string $path = '')
    {
        return app()->resourcePath($path);
    }
}
if (!function_exists('storage_path')) {
    /**
     * Get the path to the resources folder.
     *
     * @param string $path
     * @return string
     */
    function storage_path(string $path = '')
    {
        return app()->storagePath($path);
    }
}

if (!function_exists('tap')) {
    /**
     * Call the given Closure with the given value then return the value.
     *
     * @param mixed $value
     * @param callable|null $callback
     * @return mixed
     */
    function tap($value, $callback = null)
    {
        if (is_null($callback)) {
            return new InvalidArgumentException($value);
        }

        $callback($value);

        return $value;
    }
}