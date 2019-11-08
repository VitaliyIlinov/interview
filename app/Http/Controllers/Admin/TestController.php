<?php

namespace app\Http\Controllers\Admin;

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