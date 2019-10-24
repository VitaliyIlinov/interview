<?php

namespace app\Core\Session;

use app\Core\Application;
use app\Core\Support\ServiceProvider;

class SessionServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        $this->app->configure('session');

        $this->registerSessionManager();

        $this->registerSessionDriver();

    }

    private function registerSessionManager()
    {
        $this->app->singleton('session', function ($app) {
            return new SessionManager($app);
        });
    }

    private function registerSessionDriver()
    {
        $this->app->singleton('session.store', function (Application $app) {
            return $app->make('session')->driver();
        });
    }
}