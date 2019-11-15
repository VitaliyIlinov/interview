<?php

namespace app\Http\Controllers\Front;

use app\Core\Application;
use app\Core\View\View;
use app\Exceptions\FileNotFoundException;
use app\helpers\Filesystem;

class PatternsController
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
    public function factoryMethod(): View
    {
        return view('patterns.сreational.factory_method')->with([
            'content' => $this->getContent('Creational/FactoryMethod'),
        ]);
    }

    /**
     * @return View
     * @throws FileNotFoundException
     */
    public function abstractFactory(): View
    {
        return view('patterns.сreational.abstract_factory')->with([
            'content' => $this->getContent('Creational/AbstractFactory'),
        ]);
    }

    /**
     * @param string $modelPath
     * @return string
     * @throws FileNotFoundException
     */
    private function getContent(string $modelPath): string
    {
        $content = $this->filesystem->get(
            $this->getPath($modelPath)
        );
        return str_replace('<?php', '', $content);
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
            $this->app->path() . "/Models/Front/Info/Patterns/{$file}.php"
        );
    }
}