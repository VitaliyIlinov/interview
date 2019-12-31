<?php

namespace app\Widgets\Editor;

use app\Core\Application;
use app\Core\View\FileViewFinder;
use app\helpers\Filesystem;

class Editor
{
    /**
     * @var Application
     */
    private $app;

    /**
     * @var Filesystem
     */
    private $filesystem;

    /**
     * @var FileViewFinder
     */
    private $fileViewFinder;

    private $viewPath = 'widgets.editor';

    /**
     * Editor constructor.
     *
     * @param Application    $app
     * @param Filesystem     $filesystem
     * @param FileViewFinder $fileViewFinder
     */
    public function __construct(Application $app, Filesystem $filesystem, FileViewFinder $fileViewFinder)
    {
        $this->app = $app;
        $this->filesystem = $filesystem;
        $this->fileViewFinder = $fileViewFinder;
    }

    /**
     * @param string $path
     * @return string
     */
    public function render(string $path): string
    {
        return view($this->viewPath, [
            'path' => $path,
        ])->renderView();
    }

    public function saveContent(string $path, string $content)
    {
        return $this->filesystem->put(
            $this->fileViewFinder->find($path),
            $content
        );
    }

    public function readContent(string $path): string
    {
        return $this->filesystem->get(
            $this->fileViewFinder->find($path)
        );
    }
}