<?php

namespace app\Http\Controllers\Front;

use app\Core\Application;
use app\Core\View\View;
use app\Exceptions\FileNotFoundException;
use app\helpers\Filesystem;

class GitController
{

    public function rebase()
    {
        return view('git.rebase');
    }

    public function merge()
    {
        return view('git.merge');
    }

    public function cherryPick()
    {
        return view('git.cherry_pick');
    }
}