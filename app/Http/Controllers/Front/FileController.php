<?php

namespace app\Http\Controllers\Front;

class FileController
{

    public function test()
    {
       return view('file')->with(['ert'=>'dssds','sdfsdfsdf'=>'234234']);
    }
}