<?php

namespace app\Core\Bootstrap;

use app\Core\Application;
use app\support\Facades\Facade;

class RegisterFacades
{
    public function bootstrap(Application $app)
    {
        Facade::setFacadeApplication($app);

        AliasLoader::getInstance(
            $app->make('config')->get('app.aliases', [])
        )->register();
    }
}