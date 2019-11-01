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
        //todo
//        $this->app->singleton('router', function ($app) {
//            return new Router($app['events'], $app);
//        });
    }

    /**
     * Register the URL generator service.
     *
     * @return void
     */
    private function registerUrlGenerator()
    {
        $this->app->singleton('url', function ($app) {
            return new UrlGenerator($app, $app['request']);
        });
    }

    /**
     * Register the Redirector service.
     *
     * @return void
     */
    private function registerRedirector()
    {
        $this->app->singleton('redirect', function ($app) {
            $redirector = new Redirector($app['url']);

            // If the session is set on the application instance, we'll inject it into
            // the redirector instance. This allows the redirect responses to allow
            // for the quite convenient "with" methods that flash to the session.
            if (isset($app['session.store'])) {
                $redirector->setSession($app['session.store']);
            }

            return $redirector;
        });
    }
}