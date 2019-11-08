<?php

namespace app\Http\Controllers\Admin;

class DashboardController
{
    public function index()
    {
        return view('dashboard');
    }
}