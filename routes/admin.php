<?php
/**
 * @var $router app\Core\Router
 */

use app\Core\Router;

$router->get('/login', [
    'as' => 'login',
    function () use ($router) {
        return view('login');
    },
]);

$router->post('/login', 'AuthController@login');
$router->get('/destroy', 'AuthController@destroy');

$router->group(['prefix' => 'test'], function (Router $router) {

    $router->get('/', 'TestController@test');
    $router->get('/redirect', 'TestController@redirect');
});

$router->group(['middleware' => ['role:admin']], function (Router $router) {
    $router->group(['prefix' => 'ui_element'], function (Router $router) {
        $router->get('/cards', function (Router $router) {
            return view('uielement.cards');
        });
        $router->get('/general', function (Router $router) {
            return view('uielement.general');
        });
        $router->get('/carousel', function (Router $router) {
            return view('uielement.carousel');
        });
        $router->get('/list_group', function (Router $router) {
            return view('uielement.listgroup');
        });
        $router->get('/typography', function (Router $router) {
            return view('uielement.typography');
        });
        $router->get('/tabs', function (Router $router) {
            return view('uielement.tabs');
        });
    });
    $router->get('/', 'DashboardController@index');
});




