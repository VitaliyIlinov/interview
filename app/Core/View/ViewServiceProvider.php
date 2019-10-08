<?php

namespace app\Core\View;

use app\Core\View\Support\ViewFactory;
use app\Events\Dispatcher;
use app\Providers\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        $this->registerFactory();

        $this->registerViewFinder();
    }

    /**
     * Register the view environment.
     *
     * @return void
     */
    public function registerFactory()
    {
        $this->app->singleton('view', function ($app) {

            $finder = $app['view.finder'];
            $factory = $this->createFactory($finder, $app['events']);
            $factory->setContainer($app);
            $factory->share('app', $app);
            return $factory;
        });
    }

    /**
     * Create a new Factory Instance.
     * @param FileViewFinder $finder
     * @param Dispatcher $dispatcher
     * @return Support\ViewFactory
     */
    protected function createFactory(FileViewFinder $finder, Dispatcher $dispatcher)
    {
        return new ViewFactory($finder, $dispatcher);
    }

    /**
     * Register the view finder implementation.
     *
     * @return void
     */
    public function registerViewFinder()
    {
        $this->app->singleton('view.finder', function ($app) {
            return new FileViewFinder($app['config']['view'], $app['files']);
        });
    }
}