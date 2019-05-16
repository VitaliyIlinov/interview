<?php

namespace app\Http\Controllers;

class FileController
{

    public function test()
    {
       return view('file')->with([234,234,23233]);
    }
}