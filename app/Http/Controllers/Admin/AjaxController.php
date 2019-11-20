<?php

namespace app\Http\Controllers\Admin;

use app\Http\Controllers\Admin\Traits\TodoList;

class AjaxController
{
    use TodoList;

    public function editDoneTodoList()
    {
        $todoList = $this->setIsDone(
            filter_var(request()->request->get('is_done'), FILTER_VALIDATE_BOOLEAN)
        )->saveTodoListRow(request()->request->get('id'));

        return print_r($todoList, true);
    }

    public function editDescTodoList()
    {
        $todoList = $this->setDescription(request()->request->get('description'))
            ->saveTodoListRow(request()->request->get('id'));

        return print_r($todoList, true);
    }

    public function newDescTodoList()
    {
        $todoList = $this->setDescription(request()->request->get('description'))
            ->setIsDone(false)
            ->saveTodoListRow();

        return print_r($todoList, true);
    }

    public function sortTodoList()
    {
        $values = request()->request->get('value');
        $todoList = $this->getTodoListData();
        foreach ($values as $key => $value) {
            $todoListNew[$key] = $todoList[$value];
        }
        $this->putTodoListFile($todoListNew);

        return print_r($todoListNew, true);
    }
}