<?php

namespace app\Core\Router;

use app\Core\Router;
use app\Core\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // TODO: Implement boot() method.
    }

    public function register()
    {
        $this->registerRouter();
        $this->registerUrlGenerator();
        $this->registerRedirector();
    }

    /**
     * Register the router instance.
     *
     * @return void
     */
    private function registerRouter()
    {
        $this->app->singleton('router', function ($app) {
            return new Router($app['events'], $app);
        });
    }

    /**
     * Register the URL generator service.
     *
     * @return void
     */
    private function registerUrlGenerator()
    {
        //todo
    }

    /**
     * Register the Redirector service.
     *
     * @return void
     */
    private function registerRedirector()
    {
        //todo
    }
}