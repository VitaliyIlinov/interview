<?php

namespace app\Http\Controllers;

class TestController
{
    public function index()
    {

        return view('docker.main',[],'new');

       phpinfo();
//        $content = file_get_contents(app()->getBasePath('public/img/laravel/laravel-middleware.png'));
//        header('Content-Type: image/jpg');
//        echo $content;



//        $generator = $this->gen_one_to_three();
//        foreach ($generator as $value) {
//            echo "$value\n";
//        }
    }
}