<?php

namespace app\Http\Controllers\Front;

class PhpController
{
    public function classObjectOpp()
    {
        return view('php.class_object_oop');
    }

    public function kissAndDry()
    {
        return view('php.kiss_and_dry');
    }

    public function questionAnswer()
    {
        return view('php.question_answer');
    }
}