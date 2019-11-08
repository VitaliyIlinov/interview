<?php

namespace app\Core\View;

use app\Core\Support\ServiceProvider;
use app\Core\View\Support\ViewFactory;
use app\Events\Dispatcher;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        $this->loadConfig();

        $this->registerFactory();

        $this->registerViewFinder();
    }

    private function loadConfig()
    {
        $this->app->configure('view');
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
     *
     * @param FileViewFinder $finder
     * @param Dispatcher $dispatcher
     *
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
            $viewConfigs = $app['config']['view'];
            return new FileViewFinder($viewConfigs['layouts'], $viewConfigs['views'], $app['files']);
        });
    }
}