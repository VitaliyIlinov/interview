<?php
/**
 * @var $router app\Core\Router
 */

$router->get('/', function () use ($router) {
    return 'User ';
});

$router->group(['prefix' => 'solid','middleware'=>'solid|solid2', 'namespace' => 'Solid'], function () use ($router) {
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
