<?php

namespace app\Http\Controllers;

class SolidController
{

    public function openClosed()
    {
        return view('solid.openclosed')->with(['ert'=>'dssds','sdfsdfsdf'=>'234234']);
    }
}