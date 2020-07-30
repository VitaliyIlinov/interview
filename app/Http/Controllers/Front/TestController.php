<?php

namespace app\Http\Controllers\Front;

use app\Core\Database\Events\QueryExecuted;

class TestController
{
    public function index()
    {
        \DB::listen(function(QueryExecuted $query) {
            $r=1;
            /**
             * $query->sql      The SQL query that was executed.
             * $query->time     The number of milliseconds it took to execute the query.
             * $query->count    The quantity of rows query has affected.
             */
        });

//        $r= \DB::select('select * from db');
        $r= \DB::select('db')->get();
        var_dump($r);
        var_dump(\DB::getQueryLog());
        return view('docker.main',[],'new');
//       phpinfo();
//        $content = file_get_contents(app()->getBasePath('public/img/laravel/laravel-middleware.png'));
//        header('Content-Type: image/jpg');
//        echo $content;

    }
}