<?php

namespace app\Http\Controllers\Admin;

class HomeController
{
    public function home()
    {
        return view('home',[],'base');
    }
}