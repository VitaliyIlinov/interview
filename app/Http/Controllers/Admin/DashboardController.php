<?php

namespace app\Http\Controllers\Admin;

class DashboardController
{
    static public $pathToList = 'Models/Admin/helpers/todo_list.php';

    public function index()
    {
        return view('dashboard.dashboard')->with('todolist', require_once app()->getBasePath(self::$pathToList));
    }
}