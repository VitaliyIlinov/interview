<?php

namespace app\Http\Admin\Controllers;

class TestController
{


    public function redirect()
    {
        $tt=1;
        return redirect('/');
//        return redirect('/')->with('status', 'Profile updated!');
        return redirect()->route('/');
        return redirect()->route('profile', ['id' => 1]);

    }
}