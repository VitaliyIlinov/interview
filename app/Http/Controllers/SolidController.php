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
    public function singleResponsibility(): View
    {
        $content = $this->filesystem->get(
            $this->getPath('SingleResponsibility')
        );
        $content = str_replace('<?php', '', $content);
        return view('solid.openclosed')->with(['content' => $content]);
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

    /**
     * @return View
     * @throws FileNotFoundException
     */
    public function liskovBarbara(): View
    {
        $content = $this->filesystem->get(
            $this->getPath('BarbaraLiskov')
        );
        $content = str_replace('<?php', '', $content);
        return view('solid.openclosed')->with(['content' => $content]);
    }

    /**
     * @return View
     * @throws FileNotFoundException
     */
    public function interfaceSegregation(): View
    {
        $content = $this->filesystem->get(
            $this->getPath('InterfaceSegregation')
        );
        $content = str_replace('<?php', '', $content);
        return view('solid.openclosed')->with(['content' => $content]);
    }

    /**
     * @return View
     * @throws FileNotFoundException
     */
    public function DependencyInversion(): View
    {
        $content = $this->filesystem->get(
            $this->getPath('DependencyInversion')
        );
        $content = str_replace('<?php', '', $content);
        return view('solid.openclosed')->with(['content' => $content]);
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
            $this->app->path() . "/Models/Info/Solid/{$file}.php"
        );
    }
}