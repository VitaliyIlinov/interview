<?php

namespace app\Http\Admin\Controllers;

class TestController
{


    public function test()
    {
        return view('admin.test',[],'admin.base');
    }

    public function redirect()
    {
        return redirect('/');
    }
}