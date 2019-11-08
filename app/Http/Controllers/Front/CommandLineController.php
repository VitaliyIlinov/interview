<?php

namespace app\Http\Controllers\Front;

class CommandLineController
{
    public function chmod()
    {
        return view('command_line.chmod');
    }
}