<?php

//todo https://hackware.ru/?p=5587  && http://hostgid.net/baza-znanii/-htaccess/chto-takoe-mod-rewrite.html
//todo controller middleware @see https://laravel.com/docs/5.8/controllers#controller-middleware
//todo @see app/Http/View/Composers/Catalog.php download in admin
//todo artisan console: create controller&&so on
//todo RegistersExceptionHandlers
//todo DI
//todo response
//todo events
//todo middleware
//todo if wrong path to file ->404 NOT 200!!!
//todo beautiful alert
//todo https://codeseven.github.io/toastr/demo.html

define('START', microtime(true));

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

$response = $app->run();
$response->send();
$app->terminate($response);