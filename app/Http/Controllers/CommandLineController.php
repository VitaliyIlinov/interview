<?php

namespace app\Http\Controllers;

class CommandLineController
{
    public function chmod()
    {
        return view('command_line.chmod');
    }
}