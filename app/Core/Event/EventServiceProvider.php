<?php

namespace app\Core\Event;

use app\Core\Support\ServiceProvider;
use app\Events\Dispatcher;

class EventServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // TODO: Implement boot() method.
    }

    public function register()
    {
        $this->app->singleton('events', function ($app) {
            return (new Dispatcher($app));
        });
    }
}