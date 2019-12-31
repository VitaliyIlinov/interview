<?php

namespace app\Http\Controllers\Front;

class DockerController
{
    private $isEditor = true;

    public function main()
    {
        return $this->getView('docker.main');
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