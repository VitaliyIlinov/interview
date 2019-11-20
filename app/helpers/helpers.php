<?php

use app\Core\Application;
use app\Core\Container;
use app\Core\Bootstrap\LoadEnvironmentVariables;
use app\Core\Response\RedirectResponse;
use app\Core\Request;
use app\Core\Response\ResponseFactory;
use app\Core\Router\Redirector;
use app\Core\Session\SessionManager;
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

if (! function_exists('session')) {
    /**
     * Get / set the specified session value.
     *
     * If an array is passed as the key, we will assume you want to set an array of values.
     *
     * @param array|string $key
     * @param mixed $default
     * @return SessionManager
     */
    function session($key = null, $default = null): SessionManager
    {
        if (is_null($key)) {
            return app('session');
        }

        if (is_array($key)) {
            return app('session')->put($key);
        }

        return app('session')->get($key, $default);
    }
}

if (! function_exists('redirect')) {
    /**
     * Get an instance of the redirector.
     *
     * @param  string|null  $to
     * @param  int  $status
     * @param  array  $headers
     * @param  bool|null  $secure
     * @return RedirectResponse|Redirector
     */
    function redirect($to = null, $status = 302, $headers = [], $secure = null)
    {
        /**@var $redirect Redirector*/
        $redirect = app('redirect');
        if (is_null($to)) {
            return $redirect;
        }

        return $redirect->to($to, $status, $headers, $secure);
    }
}

if (! function_exists('response')) {
    /**
     * Return a new response from the application.
     *
     * @param  string  $content
     * @param  int     $status
     * @param  array   $headers
     * @return ResponseFactory|\app\Core\Response\Response
     */
    function response($content = '', $status = 200, array $headers = [])
    {
        $factory = new ResponseFactory;

        if (func_num_args() === 0) {
            return $factory;
        }

        return $factory->make($content, $status, $headers);
    }
}

if (! function_exists('request')) {
    /**
     * Get an instance of the current request or an input item from the request.
     *
     * @param  array|string  $key
     * @param  mixed   $default
     * @return Request|string|array
     */
    function request($key = null, $default = null)
    {
//        if (is_null($key)) {
            return app(Request::class);
//        }

//        if (is_array($key)) {
//            return app(Request::class)->only($key);
//        }
//
//        $value = app(Request::class)->__get($key);
//
//        return is_null($value) ? $default : $value;
    }
}
