<?php

define('ROOT', dirname(__DIR__));

require_once ROOT . '/app/Core/ClassLoader.php';

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| Here we will load the environment and create the application instance
| that serves as the central piece of this. We'll use this
| application as an "IoC" container and router.
|
*/

$app = new app\Core\Application(ROOT);
// $app->withEloquent();
/*
|--------------------------------------------------------------------------
| Register Container Bindings
|--------------------------------------------------------------------------
|
| Now we will register a few bindings in the service container. We will
| register the exception handler and the console kernel. You may add
| your own bindings here if you like or you can make another file.
|
*/

$app->singleton(
    app\contracts\Debug\ExceptionHandler::class,
    app\Exceptions\Handler::class
);

/*
|--------------------------------------------------------------------------
| Register Middleware
|--------------------------------------------------------------------------
|
| Next, we will register the middleware with the application. These can
| be global middleware that run before and after each request into a
| route or middleware that'll be assigned to some specific routes.
|
*/

/*
 * Global middleware
 */
$app->middleware([
    app\Http\Middleware\StartSession::class,
]);
$app->routeMiddleware([
    'role' => app\Http\Middleware\Role::class,
]);

/*
|--------------------------------------------------------------------------
| Register Service Providers
|--------------------------------------------------------------------------
|
| Here we will register all of the application's service providers which
| are used to bind services into the container. Service providers are
| totally optional, so you are not required to uncomment this line.
|
*/
// $app->register(App\Providers\AppServiceProvider::class);
$app->register(app\Providers\ViewProvider::class);
// $app->register(App\Providers\EventServiceProvider::class);

/*
|--------------------------------------------------------------------------
| Load The Application Routes
|--------------------------------------------------------------------------
|
| Next we will include the routes file so that they can all be added to
| the application. This will provide all of the URLs the application
| can respond to, as well as the controllers that may handle them.
|
*/

$app->router->group(['namespace' => 'app\Http\Controllers'], function ($router) {
    require ROOT . '/routes/web.php';
});
$app->router->group(['namespace'  => 'app\Http\Admin\Controllers',
                     'prefix'     => 'admin_panel',
], function ($router) {
    require ROOT . '/routes/admin.php';
});
return $app;