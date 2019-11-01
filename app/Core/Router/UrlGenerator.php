<?php

namespace app\Core\Router;

use app\Core\Application;

class UrlGenerator
{
    /**
     * The application instance.
     *
     * @var Application
     */
    private $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * Generate a url for the application.
     *
     * @param  string  $path
     * @param  array  $extra
     * @param  bool  $secure
     * @return string
     */
    public function to($path, $extra = [], $secure = null)
    {
        return $path;
    }

    /**
     * Determine if the given path is a valid URL.
     *
     * @param  string  $path
     * @return bool
     */
    private function isValidUrl($path)
    {
        return true;
    }
}