<?php

namespace app\Core\Support;

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
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public abstract function boot();

    public abstract function register();

}