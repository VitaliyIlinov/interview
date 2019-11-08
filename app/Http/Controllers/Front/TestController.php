<?php

namespace app\Http\Controllers\Front;

class TestController
{
    public function index()
    {

        return view('docker.main',[],'new');
//       phpinfo();
//        $content = file_get_contents(app()->getBasePath('public/img/laravel/laravel-middleware.png'));
//        header('Content-Type: image/jpg');
//        echo $content;

    }
}