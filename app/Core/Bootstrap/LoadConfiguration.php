<?php

namespace app\Core\Bootstrap;

use app\Core\Application;

class LoadConfiguration
{
    public function bootstrap(Application $app)
    {
        $app->configure('app');
    }
}