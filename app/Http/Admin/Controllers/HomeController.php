<?php

namespace app\Http\Admin\Controllers;

class HomeController
{
    public function home()
    {
        return view('admin.home',[],'admin.base');
    }
}