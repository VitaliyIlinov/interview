<?php
/**
 * @var $router app\Core\Router
 */

use app\Core\Router;

$router->get('/login', function () use ($router) {
    return view('admin.login',[],'admin.base');
});

$router->post('/login', 'AuthController@login');
$router->get('/destroy', 'AuthController@destroy');

$router->group(['middleware' => ['role:admin']], function ($router) {
    /**@var $router Router*/

    $router->get('/', function () use ($router) {
        var_dump(session()->all());
    });

});




