<?php

namespace app\Http\Controllers\Admin;

use app\Http\Controllers\Admin\Traits\TodoList;

class DashboardController
{
    use TodoList;

    private $goalPath = 'Models/Admin/helpers/goals.json';

    public function index()
    {
        return view('dashboard.dashboard')->with([
            'todolist' => $this->getTodoListData(),
            'goals'    => $this->getTodoListData($this->goalPath),

        ]);
    }
}