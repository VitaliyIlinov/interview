<?php

namespace app\Core\View;

use app\Core\contracts\Support\Renderable;
use Exception;
use Throwable;

class View implements Renderable
{
    /**
     * The view finder implementation.
     *
     * @var $finder FileViewFinder;
     */
    protected $finder;

    /**
     * The name of the view.
     *
     * @var string
     */
    protected $view;

    /**
     * The array of view data.
     *
     * @var array
     */
    protected $data = [];

    /**
     * The path to the view file.
     *
     * @var string
     */
    protected $path;

    public function __construct(FileViewFinder $finder)
    {
        $this->finder = $finder;
    }

    public function with(array $data = [])
    {
        $this->data = array_merge($this->data, $data);
        return $this;
    }

    public function make($view, $data, $mergeData)
    {
        $this->path = $this->finder->find(
            $view = $this->normalizeName($view)
        );

        $this->view = $view;
        $this->data = array_merge($this->data, $data);
        return $this;
    }

    /**
     * Normalize a view name.
     *
     * @param string $name
     * @return string
     */
    private function normalizeName($name)
    {
        $delimiter = FileViewFinder::HINT_PATH_DELIMITER;

        if (strpos($name, $delimiter) === false) {
            return str_replace('/', '.', $name);
        }

        [$namespace, $name] = explode($delimiter, $name);

        return $namespace . $delimiter . str_replace('/', '.', $name);
    }

    public function render()
    {
        return $this->renderContents();
    }

    /**
     * Get the contents of the view instance.
     *
     * @return string
     * @throws Throwable
     */
    private function renderContents()
    {
        ob_start();

        extract($this->data, EXTR_SKIP);

        try {
            include $this->path;
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $e) {
            throw $e;
        }

        return ltrim(ob_get_clean());
    }
}