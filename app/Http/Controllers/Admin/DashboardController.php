<?php

namespace app\Http\Controllers\Admin;

use app\Http\Controllers\Admin\Traits\TodoList;

class DashboardController
{
    use TodoList;

    public function index()
    {
        return view('dashboard.dashboard')->with('todolist', $this->getTodoListData());
    }
}