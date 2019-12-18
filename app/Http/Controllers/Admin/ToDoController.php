<?php

namespace app\Http\Controllers\Admin;

use app\support\Facades\ToDoWidget;

class ToDoController extends AjaxController
{
    public const PATH = 'Models/Admin/helpers/todo.json';

    public function editDone()
    {
        $result = ToDoWidget::setIsDone(
            filter_var(request()->request->get('is_done'), FILTER_VALIDATE_BOOLEAN)
        )
            ->setFilePath(static::PATH)
            ->saveListRow(request()->request->get('id'));

        return response()->json($result);
    }

    public function editDesc()
    {
        $result = ToDoWidget::setDescription(request()->request->get('description'))
            ->setFilePath(static::PATH)
            ->saveListRow(request()->request->get('id'));

        return response()->json($result);
    }

    public function newDesc()
    {
        $result = ToDoWidget::setDescription(request()->request->get('description'))
            ->setIsDone(false)
            ->setFilePath(static::PATH)
            ->saveListRow();

        return response()->json($result);
    }

    public function sort()
    {
        $values = request()->request->get('value');
        $widget = ToDoWidget::setFilePath(static::PATH);
        $todoList = $widget->getListData();
        foreach ($values as $key => $value) {
            $todoListNew[$key] = $todoList[$value];
        }
        $widget->putListFile($todoListNew);

        return response()->json($todoListNew);
    }

    public function delete()
    {
        $id= request()->request->get('id');
        $widget = ToDoWidget::setFilePath(static::PATH);
        $todoList = $widget->getListData();
        unset($todoList[$id]);
        $widget->putListFile($todoList);

        return response()->json($todoList);
    }
}