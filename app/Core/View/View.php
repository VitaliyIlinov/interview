<?php

namespace app\Core\View;

use app\contracts\Support\Renderable;
use Exception;
use Throwable;

class View implements Renderable
{
    /**
     * The view finder implementation.
     *
     * @var $finder FileViewFinder;
     */
    private $finder;

    /**
     * The path to the view file.
     *
     * @var string
     */
    private $view;

    /**
     * The path to the layout file.
     *
     * @var string
     */
    private $layout;

    /**
     * The array of view data.
     *
     * @var array
     */
    private $data = [];

    public function __construct(FileViewFinder $finder)
    {
        $this->finder = $finder;
    }

    public function with(array $data = [])
    {
        $this->data = array_merge($this->data, $data);
        return $this;
    }

    public function render()
    {
        $this->with(['view' => $this->view]);
        return $this->renderContents($this->data);
    }

    /**
     * @param $view
     * @param $data
     * @param $layout
     * @return $this
     */
    public function make($view, $data, $layout)
    {
        $this->setLayout($layout);
        $this->setView($view);
        $this->data = $data;
        return $this;
    }

    /**
     * @param string $view
     * @return View
     */
    public function setView(string $view): self
    {
        $this->view = $this->finder->find(
            $this->normalizeName($view)
        );
        return $this;
    }

    /**
     * @param string $layout
     * @return View
     */
    public function setLayout(string $layout): self
    {
        $this->layout = $this->finder->find(
            $this->normalizeName($layout)
        );
        return $this;
    }

    /**
     * Get the contents of the view instance.
     *
     * @param array $data
     * @return string
     * @throws Throwable
     */
    private function renderContents(array $data)
    {
        ob_start();

        extract($data, EXTR_SKIP);

        try {
            include $this->layout;
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $e) {
            throw $e;
        }

        return ltrim(ob_get_clean());
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
}