<?php

namespace app\Http\Controllers\Admin;

use app\support\Facades\ToDoWidget;

class DashboardController
{

    public function index()
    {
        return view('dashboard.dashboard')->with([
            'todolist' => ToDoWidget::render(
                ToDoWidget::setFilePath(ToDoController::PATH)->getListData(),
                'widgets/todo',
                'todo_list'
            ),
            'goals' => ToDoWidget::render(
                ToDoWidget::setFilePath(GoalsController::PATH)->getListData(),
                'widgets/todo',
                'goals_list'
            ),
        ]);
    }
}