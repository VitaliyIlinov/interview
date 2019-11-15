<?php

namespace app\Http\Controllers\Front;

use app\helpers\Filesystem;

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

    public function questionAnswer(Filesystem $filesystem)
    {
        $content = $this->getPath('Builder');
        return view('php.question_answer')->with(['buider' => $content]);
    }

    /**
     * @param string $file
     * @return string
     */
    private function getPath(string $file): string
    {
        return str_replace(
            '/',
            DIRECTORY_SEPARATOR,
            app()->path() . "/Models/Front/Info/Patterns/Creational/{$file}.php"
        );
    }
}