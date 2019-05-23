<?php

namespace app\Http\Controllers;

class FileController
{

    public function test()
    {
       return view('file')->with(['ert'=>'dssds','sdfsdfsdf'=>'234234']);
    }
}