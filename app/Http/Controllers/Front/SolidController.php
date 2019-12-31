<?php

namespace app\Http\Controllers\Front;

use app\Core\Application;
use app\Core\View\View;
use app\Exceptions\FileNotFoundException;
use app\helpers\Filesystem;

class SolidController
{
    private $isEditor = true;

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
    public function singleResponsibility(): View
    {
        $content = $this->getContent('SingleResponsibility');
        return $this->getView('solid.single', ['content' => $content]);
    }

    /**
     * @return View
     * @throws FileNotFoundException
     */
    public function openClosed(): View
    {
        return $this->getView('solid.openclosed', [
            'content' => $this->getContent('OpenClosed'),
            'content2' => $this->getContent('OpenClosed2'),
        ]);
    }

    /**
     * @return View
     * @throws FileNotFoundException
     */
    public function liskovBarbara(): View
    {
        $content = $this->getContent('BarbaraLiskov');
        return $this->getView('solid.liskov', ['content' => $content]);
    }

    /**
     * @return View
     * @throws FileNotFoundException
     */
    public function interfaceSegregation(): View
    {
        $content = $this->getContent('InterfaceSegregation');
        return $this->getView('solid.interfaceSegregation', ['content' => $content]);
    }

    /**
     * @return View
     * @throws FileNotFoundException
     */
    public function DependencyInversion(): View
    {
        $content = $this->getContent('DependencyInversion') . PHP_EOL . $this->getContent('DependencyInversion2');
        return $this->getView('solid.dependecyInvertion', ['content' => $content]);
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
            $this->app->path() . "/Models/Front/Info/Solid/{$file}.php"
        );
    }

    private function isEdit(): bool
    {
        return role('admin') && $this->isEditor;
    }

    private function getView($path, $content)
    {
        return view($path)->with($content)->with(['isEditor' => $this->isEdit()]);
    }
}