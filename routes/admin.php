<?php
/**
 * @var $router app\Core\Router
 */

use app\Core\Router;

$router->get('/login', [
    'as' => 'login',
    function () use ($router) {
        return view('login')->renderView();
    },
]);

$router->post('/login', 'AuthController@login');
$router->get('/destroy', 'AuthController@destroy');

$router->group(['prefix' => 'test'], function (Router $router) {

    $router->get('/', 'TestController@test');
    $router->get('/redirect', 'TestController@redirect');
});

$router->group(['middleware' => ['role:admin']], function (Router $router) {

    $router->get('/', function () {
        return redirect()->route('dashboard');
    });

    $router->group(['prefix' => 'dashboard'], function (Router $router) {
        $router->get('/main', ['as' => 'dashboard','uses'=>'DashboardController@index']);
    });

    $router->group(['prefix' => 'ui_element'], function (Router $router) {
        $router->get('/css_animate', function () {
            return view('uielement.css_animate');
        });
        $router->get('/cards', function () {
            return view('uielement.cards');
        });
        $router->get('/general', function () {
            return view('uielement.general');
        });
        $router->get('/carousel', function () {
            return view('uielement.carousel');
        });
        $router->get('/list_group', function () {
            return view('uielement.listgroup');
        });
        $router->get('/toastr', function () {
            return view('uielement.toastr');
        });
        $router->get('/accordions', function () {
            return view('uielement.accordions');
        });
        $router->get('/tabs', function () {
            return view('uielement.tabs');
        });
    });

    $router->group(['prefix' => 'charts'], function (Router $router) {
        $router->get('/gauge', function () {
            return view('charts.gauge');
        });
    });

    $router->group(['prefix' => 'forms'], function (Router $router) {
        $router->get('/form_elements', function () {
            return view('forms.form_elements');
        });
        $router->get('/form_validation', function () {
            return view('forms.form_validation');
        });
        $router->get('/multiselect', function () {
            return view('forms.multiselect');
        });
        $router->get('/date_picker', function () {
            return view('forms.datepicker');
        });
        $router->get('/bootstrap_select', function () {
            return view('forms.bootstrap_select');
        });
    });

    $router->group(['prefix' => 'tables'], function (Router $router) {
        $router->get('/general_tables', function () {
            return view('tables.general_tables');
        });
        $router->get('/data_tables', function () {
            return view('tables.data_tables');
        });
    });

    $router->group(['prefix' => 'pages'], function (Router $router) {
        $router->get('/pricing_tables', function () {
            return view('pages.pricing_tables');
        });
        $router->get('/timeline', function () {
            return view('pages.timeline');
        });
        $router->get('/calendar', function () {
            return view('pages.calendar');
        });
        $router->get('/sortable_nestable', function () {
            return view('pages.sortable_nestable');
        });
        $router->get('/media_objects', function () {
            return view('pages.media_objects');
        });
        $router->get('/cropper', function () {
            return view('pages.cropper');
        });
        $router->get('/color_picker', function () {
            return view('pages.color_picker');
        });
    });

    $router->group(['prefix' => 'apps'], function (Router $router) {
        $router->get('/inbox', function () {
            return view('apps.inbox');
        });
        $router->get('/email_detail', function () {
            return view('apps.email_detail');
        });
        $router->get('/email_compose', function () {
            return view('apps.email_compose');
        });
        $router->get('/message_chat', function () {
            return view('apps.message_chat');
        });
    });

    $router->group(['prefix' => 'icons'], function (Router $router) {
        $router->get('/icon_fontawesome', function () {
            return view('icons.icon_fontawesome');
        });
        $router->get('/icon_material', function () {
            return view('icons.icon_material');
        });
        $router->get('/icon_simple', function () {
            return view('icons.icon_simple');
        });
        $router->get('/icon_themify', function () {
            return view('icons.icon_themify');
        });
    });

    $router->group(['prefix' => 'documentation'], function (Router $router) {
        $router->get('/plugin_sources', function () {
            return view('documentation.plugin_sources');
        });
        $router->get('/literature', function () {
            return view('documentation.literature');
        });
    });

    $router->group(['prefix' => 'ajax'], function (Router $router) {
        $router->group(['prefix' => 'todo_list'], function (Router $router) {
            $router->put('/sort', ['as' => 'sortTodoList','uses'=>'ToDoController@sort']);
            $router->patch('/edit_desc', ['as' => 'editDescTodoList','uses'=>'ToDoController@editDesc']);
            $router->post('/new_desc', ['as' => 'newDescTodoList','uses'=>'ToDoController@newDesc']);
            $router->patch('/edit_done', ['as' => 'editDoneTodoList','uses'=>'ToDoController@editDone']);
            $router->delete('/delete', ['as' => 'deleteTodoList','uses'=>'ToDoController@delete']);
        });
//        POST — создание ресурса.
//        PUT — замена ресурса целиком.
//        PATCH — редактирование ресурса.
        $router->group(['prefix' => 'goals_list'], function (Router $router) {
            $router->put('/sort', ['as' => 'sortGoalsList','uses'=>'GoalsController@sort']);
            $router->patch('/edit_desc', ['as' => 'editDescGoalsList','uses'=>'GoalsController@editDesc']);
            $router->post('/new_desc', ['as' => 'newDescGoalsList','uses'=>'GoalsController@newDesc']);
            $router->patch('/edit_done', ['as' => 'editDoneGoalsList','uses'=>'GoalsController@editDone']);
            $router->delete('/delete', ['as' => 'deleteGoalsList','uses'=>'GoalsController@delete']);
        });
    });

});




