<?php

namespace app\Http\Controllers\Front;

use app\helpers\Filesystem;

class PhpController
{
    private $isEditor = true;

    public function classObjectOpp()
    {
        return $this->getView('php.class_object_oop');
    }

    public function kissAndDry()
    {
        return $this->getView('php.kiss_and_dry');
    }

    public function questionAnswer(Filesystem $filesystem)
    {
        $content = $this->getPath('Builder');
        return $this->getView('php.question_answer', ['buider' => $content]);
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

    private function isEdit(): bool
    {
        return role('admin') && $this->isEditor;
    }

    private function getView(string $path, array $content=[])
    {
        return view($path)->with($content)->with(['isEditor' => $this->isEdit()]);
    }
}