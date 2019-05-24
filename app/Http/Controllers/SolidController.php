<?php

namespace app\Http\Controllers;

use app\Core\Application;
use app\Core\View\View;
use app\Exceptions\FileNotFoundException;
use app\helpers\Filesystem;

class SolidController
{
    /**
     * @var Filesystem
     */
    private $filesystem;

    /**
     * @var Application
     */
    private $app;

    public function __construct(Filesystem $filesystem, Application $app)
    {
        $this->filesystem = $filesystem;
        $this->app = $app;
    }

    /**
     * @return View
     * @throws FileNotFoundException
     */
    public function openClosed(): View
    {
        $content = $this->filesystem->get(
            $this->getPath('OpenClosed')
        );
        $content = str_replace('<?php', '', $content);
        return view('solid.openclosed')->with(['content' => $content]);
    }

    private function getPath(string $file): string
    {
        return str_replace(
            '/',
            DIRECTORY_SEPARATOR,
            $this->app->path() . "/Models/Info/Solid/{$file}.php"
        );
    }
}