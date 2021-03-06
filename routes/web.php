<?php
/**
 * @var $router app\Core\Router
 */

$router->get('/', function () use ($router) {
    return redirect()->to('solid/single_responsibility');
});

$router->group(['prefix' => 'test'], function () use ($router) {
    $router->get('/', ['uses' => 'TestController@index', 'as' => 't']);
});

$router->get('posts/{postId}/comments/{commentId}', function ($postId, $commentId) {
    //
});

$router->group(['prefix' => 'accounts/{accountId}'], function () use ($router) {
    $router->get('detail', function ($accountId) {
        // Matches The "/accounts/{accountId}/detail" URL
    });
});

$router->get('user', 'FileController@test');
$router->get('user/{name}', function ($name = null) {
    return $name;
});

$router->group(['prefix' => 'content','middleware'=>'role:admin'], function () use ($router) {
    $router->get('read', 'AjaxController@readContent');
    $router->put('save', 'AjaxController@saveContent');
});

$router->group(['prefix' => 'solid'], function () use ($router) {
    $router->get('single_responsibility', 'SolidController@singleResponsibility');
    $router->get('openclosed', 'SolidController@openClosed');
    $router->get('liskov_barbara', 'SolidController@liskovBarbara');
    $router->get('interface_segregation', 'SolidController@interfaceSegregation');
    $router->get('dependency_inversion', 'SolidController@DependencyInversion');
});

$router->group(['prefix' => 'php'], function () use ($router) {
    $router->get('class_object_oop', 'PhpController@classObjectOpp');
    $router->get('kiss_and_dry', 'PhpController@kissAndDry');
    $router->get('question_answer', 'PhpController@questionAnswer');
});

$router->group(['prefix' => 'mysql'], function () use ($router) {
    $router->get('engine', 'MysqlController@engine');
    $router->get('indexes', 'MysqlController@indexes');
    $router->get('relation_type', 'MysqlController@relationType');
    $router->get('query', 'MysqlController@query');
    $router->get('joins', 'MysqlController@joins');
    $router->get('useful_information', 'MysqlController@usefulInformation');
});

$router->group(['prefix' => 'git'], function () use ($router) {
    $router->get('rebase', 'GitController@rebase');
    $router->get('merge', 'GitController@merge');
    $router->get('cherry_pick', 'GitController@cherryPick');
});
$router->group(['prefix' => 'patterns'], function () use ($router) {
    $router->get('factory_method', 'PatternsController@factoryMethod');
    $router->get('abstract_factory', 'PatternsController@abstractFactory');
    $router->get('builder', 'GitController@cherryPick');
    $router->get('singleton', 'GitController@cherryPick');
});

$router->group(['prefix' => 'command_line'], function () use ($router) {
    $router->get('/chmod', 'CommandLineController@chmod');
});
$router->group(['prefix' => 'docker'], function () use ($router) {
    $router->get('/main', 'DockerController@main');
});
