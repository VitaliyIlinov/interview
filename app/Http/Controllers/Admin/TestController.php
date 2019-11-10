<?php

namespace app\Http\Controllers\Admin;

class TestController
{


    public function test()
    {
        return view('test');
    }

    public function redirect()
    {
        return redirect('/');
    }
}