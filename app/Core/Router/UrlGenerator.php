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

    public function route($name, $parameters = [], $secure = null)
    {
        return $name;
    }
}