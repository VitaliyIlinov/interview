<?php

namespace app\Core\View;

use app\helpers\Filesystem;
use InvalidArgumentException;

class FileViewFinder
{
    /**
     * Hint path delimiter value.
     *
     * @var string
     */
    const HINT_PATH_DELIMITER = '::';

    /**
     * The filesystem instance.
     *
     * @var Filesystem
     */
    protected $files;

    /**
     * The array of active view paths.
     *
     * @var array
     */
    protected $paths;

    /**
     * The array of views that have been located.
     *
     * @var array
     */
    protected $views = [];

    /**
     * The array of views that have been located.
     *
     * @var array
     */
    protected $layouts = [];

    /**
     * Register a view extension with the finder.
     *
     * @var array
     */
    protected $extensions = ['php'];

    /**
     * Create a new file view loader instance.
     * @param array $path
     * @param Filesystem $filesystem
     */
    public function __construct(array $path, Filesystem $filesystem)
    {
        $this->paths = $path;
        $this->files = $filesystem;
    }

    /**
     * Find the given view in the list of paths.
     *
     * @param string $name
     * @return string
     *
     * @throws \InvalidArgumentException
     */
    public function find($name)
    {
        if (isset($this->views[$name])) {
            return $this->views[$name];
        }
        foreach ($this->paths as $path) {
            foreach ($this->getPossibleViewFiles($name) as $file) {
                if ($this->files->exists($viewPath = $path . '/' . $file)) {
                    return $this->views[$name] = $viewPath;
                }
            }
        }

        throw new InvalidArgumentException("View [{$name}] not found.");
    }

    /**
     * Get an array of possible view files.
     *
     * @param string $name
     * @return array
     */
    protected function getPossibleViewFiles($name)
    {
        return array_map(function ($extension) use ($name) {
            return str_replace('.', '/', $name) . '.' . $extension;
        }, $this->extensions);
    }
}