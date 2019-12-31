<?php

namespace app\Http\Controllers\Front;

class CommandLineController
{
    private $isEditor = true;

    public function chmod()
    {
        return $this->getView('command_line.chmod');
    }

    private function isEdit(): bool
    {
        return role('admin') && $this->isEditor;
    }

    private function getView(string $path)
    {
        return view($path)->with(['isEditor' => $this->isEdit()]);
    }

}