<?php

namespace app\Core\Router;

use app\Core\Application;
use app\Core\Request;
use app\helpers\Str;

class UrlGenerator
{
    /**
     * The application instance.
     *
     * @var Application
     */
    private $app;

    /**
     * The application instance.
     *
     * @var Request
     */
    private $request;

    public function __construct(Application $app, Request $request)
    {
        $this->app = $app;
        $this->request = $request;
    }

    /**
     * Get the request instance.
     *
     * @return Request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Generate a url for the application.
     *
     * @param string $path
     * @param array $extra
     * @param bool $secure
     * @return string
     */
    public function to($path, $extra = [], $secure = null)
    {
        if ($this->isValidUrl($path)) {
            return $path;
        }

        $root = $this->getRootUrl();

        return $this->trimUrl($root, $path);
    }

    /**
     * Format the given URL segments into a single URL.
     *
     * @param string $root
     * @param string $path
     * @param string $tail
     * @return string
     */
    protected function trimUrl($root, $path, $tail = '')
    {
        return trim($root . '/' . trim($path, '/'), '/');
    }

    /**
     * Get the base URL for the request.
     *
     * @return string
     */
    protected function getRootUrl()
    {
        return $this->app->make('request')->root();
    }

    /**
     * Determine if the given path is a valid URL.
     *
     * @param string $path
     * @return bool
     */
    private function isValidUrl($path)
    {
        if (Str::startsWith($path, ['#', '//', 'mailto:', 'tel:', 'http://', 'https://'])) {
            return true;
        }

        return filter_var($path, FILTER_VALIDATE_URL) !== false;
    }

    /**
     * Get the URL to a named route.
     *
     * @param  string  $name
     * @param  mixed   $parameters
     * @param  bool|null  $secure
     * @return string
     *
     * @throws \InvalidArgumentException
     */
    public function route($name, $parameters = [], $secure = null)
    {
        if (!isset($this->app->router->namedRoutes[$name])) {
            throw new \InvalidArgumentException("Route [{$name}] not defined.");
        }

        $uri = $this->app->router->namedRoutes[$name];

        //todo
    }
}