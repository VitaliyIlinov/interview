<?php

namespace app\Providers;

use app\Core\Support\ServiceProvider;
use app\Widgets\TodoList\ToDo;

class WidgetProviders extends ServiceProvider
{
    public function boot()
    {
        // TODO: Implement boot() method.
    }

    public function register()
    {
        $this->app->singleton(ToDo::class,function ($app){
            return new ToDo($app);
        });
    }
}