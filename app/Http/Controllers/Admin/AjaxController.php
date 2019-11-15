<?php

namespace app\Http\Controllers\Admin;

class AjaxController
{
    public function changeTodoList()
    {
        $key = request()->request->get('key');
        $value = request()->request->get('value');
        $filePath = app()->getBasePath(DashboardController::$pathToList);
        $todoList = require_once $filePath;
        $todoList[$key]['is_done'] = $value;
        $todoList[$key]['created_time'] = date("H:i:s");
        $contents = var_export($todoList, true);
        file_put_contents($filePath, "<?php\n return {$contents};\n");

        return true;
    }

    public function sortTodoList()
    {

    }
}