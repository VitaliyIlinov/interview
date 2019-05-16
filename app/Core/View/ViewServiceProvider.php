<?php

namespace app\Core\View;

use app\Providers\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        $this->registerFactory();
    }

    /**
     * Register the view environment.
     *
     * @return void
     */
    public function registerFactory()
    {
        $this->app->singleton('view', function ($app) {
            return new View(
                new FileViewFinder($app['config']['view.path'],$app['files'])
            );
        });
    }
}