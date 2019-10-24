<?php

namespace app\Core\Bootstrap;

use app\Core\Application;

class BootProviders
{
    public function bootstrap(Application $app)
    {
        $app->boot();
    }
}