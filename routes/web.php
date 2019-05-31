<?php
/**
 * @var $router app\Core\Router
 */

$router->get('/', function () use ($router) {
    header('Location: '.'solid/single_responsibility');
    exit;
});

$router->group(['prefix' => 'solide','middleware'=>'solid|solid2', 'namespace' => 'Solid'], function () use ($router) {
    $router->get('single_responsibility', function ($id) {
        return 'User ' . $id;
    });
    $router->get('single_responsibility/{id}', function ($id) {
        return 'User ' . $id;
    });
});

$router->get('posts/{postId}/comments/{commentId}', function ($postId, $commentId) {
    //
});


$router->get('profile', [
    'as' => 'profile', 'uses' => 'UserController@showProfile'
]);

$router->get('user/{id}/profile', ['as' => 'profile', function ($id) {
    //
}]);

$router->group(['prefix' => 'accounts/{accountId}'], function () use ($router) {
    $router->get('detail', function ($accountId)    {
        // Matches The "/accounts/{accountId}/detail" URL
    });
});

$router->get('profile', [ 'uses' => 'UserController@showProfile']);

$router->get('user','FileController@test');
$router->get('user/{name}', function ($name = null) {
    return $name;
});

$router->group(['prefix' => 'solid'], function () use ($router) {
    $router->get('single_responsibility','SolidController@singleResponsibility');
    $router->get('openclosed','SolidController@openClosed');
    $router->get('liskov_barbara','SolidController@liskovBarbara');
    $router->get('interface_segregation','SolidController@interfaceSegregation');
    $router->get('dependency_inversion','SolidController@DependencyInversion');
});

$router->group(['prefix' => 'php'], function () use ($router) {
    $router->get('class_object_oop','PhpController@classObjectOpp');
});

$router->group(['prefix' => 'mysql'], function () use ($router) {
    $router->get('engine','MysqlController@engine');
    $router->get('indexes','MysqlController@indexes');
    $router->get('relation_type','MysqlController@relationType');
    $router->get('query','MysqlController@query');
    $router->get('joins','MysqlController@joins');
    $router->get('useful_information','MysqlController@usefulInformation');
});