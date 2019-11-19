<?php

namespace app\Http\Controllers\Admin;

use app\Http\Controllers\Admin\Traits\TodoList;

class AjaxController
{
    use TodoList;

    public function editDoneTodoList()
    {
        $id = request()->request->get('key');
        $todoList = $this->getTodoListData();
        $todoList[$id] = $this->setTodoRow(
            null,
            request()->request->get('value')
        );
        $this->putTodoListFile($todoList);

        return $todoList;
    }

    public function editDescTodoList()
    {
        $id = request()->request->get('key');
        $todoList = $this->getTodoListData();
        $todoList[$id] = $this->setTodoRow(
            request()->request->get('description')
        );
        $this->putTodoListFile($todoList);

        return $todoList;
    }

    public function newDescTodoList()
    {
        $todoList = $this->getTodoListData();
        $todoList[] = $this->setTodoRow(
            request()->request->get('description')
        );
        $this->putTodoListFile($todoList);

        return $todoList;
    }

    public function sortTodoList()
    {
        $values = request()->request->get('value');
        $filePath = app()->getBasePath(DashboardController::$pathToList);
        $todoList = require $filePath;
        foreach ($values as $key => $value) {
            $todoListw[$key] = $todoList[$value];
        }
        $contents = var_export($todoListw, true);
        file_put_contents($filePath, "<?php\n return {$contents};\n", LOCK_EX);
        $new = require $filePath;
        return print_r($new, true);
    }
}