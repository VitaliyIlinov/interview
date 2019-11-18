<?php

namespace app\Http\Controllers\Admin;

class AjaxController
{
    public function editDoneTodoList()
    {
        $key = request()->request->get('key');
        $value = request()->request->get('value');
        $filePath = app()->getBasePath(DashboardController::$pathToList);
        $todoList = require_once $filePath;
        $todoList[$key]['is_done'] = $value;
        $todoList[$key]['created_time'] = date("Y-m-d H:i:s");
        $contents = var_export($todoList, true);
        file_put_contents($filePath, "<?php\n return {$contents};\n");

        return print_r($todoList[$key], true);
    }

    public function sortTodoList()
    {
        $values = request()->request->get('value');
        $filePath = app()->getBasePath(DashboardController::$pathToList);
        $todoList = require_once $filePath;
        foreach ($values as $key => $value) {
            $todoListw[$key] = $todoList[$value];
        }
        $contents = var_export($todoListw, true);
        file_put_contents($filePath, "<?php\n return {$contents};\n", LOCK_EX);
        return print_r($todoListw, true);
    }

    public function editDescTodoList()
    {
        $id = request()->request->get('id');
        $description = request()->request->get('description');
        $filePath = app()->getBasePath(DashboardController::$pathToList);
        $todoList = require_once $filePath;
        $todoList[$id]['description'] = $description;
        $todoList[$id]['created_time'] = date("Y-m-d H:i:s");
        $contents = var_export($todoList, true);
        file_put_contents($filePath, "<?php\n return {$contents};\n");

        return print_r($todoList[$id], true);
    }

    public function newDescTodoList()
    {
        $id = request()->request->get('id');
        $description = request()->request->get('description');
        $filePath = app()->getBasePath(DashboardController::$pathToList);
        $todoList = require_once $filePath;
        $todoList[] = [
            'description' => $description,
            'created_time' => date("Y-m-d H:i:s"),
            'is_done' => false,
        ];
        $contents = var_export($todoList, true);
        file_put_contents($filePath, "<?php\n return {$contents};\n");

        return print_r($todoList, true);
    }
}