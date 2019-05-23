<?php

//todo view
//todo done config in lumen load view() /lumen/vendor/laravel/lumen-framework/config/view.php
//todo RegistersExceptionHandlers
//todo DI
//todo response
//todo events
//todo middleware
//todo compile view
/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| First we need to get an application instance. This creates an instance
| of the application / container and bootstraps the application so it
| is ready to receive HTTP .
|
*/
//error_reporting(E_ALL);

ini_set('display_errors', 1);
/**
 * @var $app app\Core\Application
 */
$app = require __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$app->run();