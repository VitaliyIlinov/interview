<?php

namespace app\Core\Bootstrap;

use app\Core\Application;

class RegisterProviders
{
    public function bootstrap(Application $app)
    {
        foreach ($app['config']['app']['providers'] as $provider){
            $app->register($provider);
        }
    }
}