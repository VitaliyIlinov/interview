<?php

namespace app\Http\Controllers\Front;

use app\Core\Application;
use app\Core\View\View;
use app\Exceptions\FileNotFoundException;
use app\helpers\Filesystem;

class GitController
{
    private $isEditor = true;

    public function rebase()
    {
        return $this->getView('git.rebase');
    }

    public function merge()
    {
        return $this->getView('git.merge');
    }

    public function cherryPick()
    {
        return $this->getView('git.cherry_pick');
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