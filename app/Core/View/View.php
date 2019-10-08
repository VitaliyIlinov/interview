<?php

namespace app\Core\View;

use app\contracts\Support\Renderable;
use app\Core\View\Support\ViewFactory;
use Throwable;

class View implements Renderable
{
    /**
     * The view factory instance.
     *
     * @var ViewFactory
     */
    protected $factory;

    /**
     * The path to the layout file.
     *
     * @var string
     */
    private $layout;

    /**
     * The view file name.
     *
     * @var string
     */
    private $view;

    /**
     * The full path to the view file.
     *
     * @var string
     */
    private $fullViewPath;

    /**
     * The array of view data.
     *
     * @var array
     */
    private $data = [];

    public function __construct(ViewFactory $factory, string $layout, string $view, string $fullViewPath, array $data)
    {
        $this->factory = $factory;
        $this->layout = $layout;
        $this->view = $view;
        $this->fullViewPath = $fullViewPath;
        $this->data = $data;
    }

    /**
     * Add a piece of data to the view.
     *
     * @param string|array $key
     * @param mixed $value
     * @return $this
     */
    public function with($key, $value = null)
    {
        if (is_array($key)) {
            $this->data = array_merge($this->data, $key);
        } else {
            $this->data[$key] = $value;
        }

        return $this;
    }

    /**
     * @return string
     * @throws Throwable
     */
    public function render(): string
    {
        $this->factory->incrementRender();

        $this->factory->callComposer($this);

        $data = $this->gatherData();

        return $this->renderContents($this->layout, $this->fullViewPath, $data);
    }

    /**
     * Get the evaluated contents of the view.
     *
     * @return string
     */
    protected function gatherData()
    {
        return array_merge($this->factory->getShared(), $this->data);
    }

    /**
     * Get the contents of the view instance.
     *
     * @param string $layout
     * @param string $view
     * @param array $data
     * @return string
     * @throws Throwable
     */
    private function renderContents(string $layout, string $view, array $data): string
    {
        ob_start();

        extract($data, EXTR_SKIP);

        try {
            require_once $layout;
        } catch (Throwable $e) {
            throw $e;
        }

        return ltrim(ob_get_clean());
    }

    /**
     * @return string
     */
    public function getView(): string
    {
        return $this->view;
    }
}