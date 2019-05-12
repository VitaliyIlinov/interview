<?php

namespace app\Providers;

use app\Core\Application;

abstract class ServiceProvider
{

    /**
     * The application instance.
     *
     * @var Application
     */
    protected $app;

    /**
     * Create a new service provider instance.
     *
     * @param  Application  $app
     * @return void
     */
    public function __construct($app)
    {
        $this->app = $app;
    }

}