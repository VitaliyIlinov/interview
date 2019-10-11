<?php

namespace app\Core\View\Support;

use app\Core\Application;
use app\Core\View\FileViewFinder;
use app\Core\View\View;
use app\Events\Dispatcher;
use app\helpers\Str;
use InvalidArgumentException;

class ViewFactory
{
    /**
     * @var FileViewFinder
     */
    protected $finder;

    /**
     * The event dispatcher instance.
     *
     * @var Dispatcher
     */
    protected $events;

    /**
     * The IoC container instance.
     *
     * @var Application
     */
    protected $container;

    /**
     * The number of active rendering operations.
     *
     * @var int
     */
    protected $renderCount = 0;

    /**
     * Data that should be available to all templates.
     *
     * @var array
     */
    protected $shared = [];

    /**
     * The extension to engine bindings.
     *
     * @var array
     */
    protected $extensions = [
        'blade.php' => 'blade',
        'php'       => 'php',
        'css'       => 'file',
    ];

    public function __construct(FileViewFinder $finder, Dispatcher $events)
    {
        $this->finder = $finder;
        $this->events = $events;
    }

    /**
     * Get the evaluated view contents for the given view.
     *
     * @param string $view
     * @param array $data
     * @param string $layout
     * @return View
     */
    public function make(string $view, array $data, string $layout)
    {
        $fullViewPath = $this->finder->find(
            $view = $this->normalizeName($view)
        );
        $layout = $this->finder->find($this->normalizeName($layout));

        return $this->viewInstance($layout, $view, $fullViewPath, $data);
    }

    /**
     * Create a new view instance from the given arguments.
     * @param string $layout
     * @param string $view
     * @param string $fullViewPath
     * @param array $data
     * @return View
     */
    protected function viewInstance(string $layout, string $view, string $fullViewPath, array $data)
    {
        return new View($this, $layout, $view, $fullViewPath, $data);
    }

    /**
     * Add a piece of shared data to the environment.
     *
     * @param array|string $key
     * @param mixed $value
     * @return mixed
     */
    public function share($key, $value = null)
    {
        $keys = is_array($key) ? $key : [$key => $value];

        foreach ($keys as $key => $value) {
            $this->shared[$key] = $value;
        }

        return $value;
    }

    /**
     * Determine if a given view exists.
     *
     * @param string $view
     * @return bool
     */
    public function exists($view): bool
    {
        try {
            $this->finder->find($view);
        } catch (InvalidArgumentException $e) {
            return false;
        }

        return true;
    }



    /**
     * Increment the rendering counter.
     *
     * @return void
     */
    public function incrementRender()
    {
        $this->renderCount++;
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
            return str_replace('.', '/', $name);
        }

        [$namespace, $name] = explode($delimiter, $name);

        return $namespace . $delimiter . str_replace('.', '/', $name);
    }

    /**
     * Register a view composer event.
     *
     * @param array|string $views
     * @param \Closure|string $callback
     * @return array
     */
    public function composer($views, $callback)
    {
        $composers = [];

        foreach ((array)$views as $view) {
            $composers[] = $this->addViewEvent($view, $callback, 'composing: ');
        }

        return $composers;
    }

    /**
     * Add an event for a given view.
     *
     * @param string $view
     * @param \Closure|string $callback
     * @param string $prefix
     * @return \Closure|null
     */
    protected function addViewEvent(string $view, $callback, $prefix = 'composing: ')
    {
        $view = $this->normalizeName($view);

        if ($callback instanceof \Closure) {
            $this->addEventListener($prefix . $view, $callback);

            return $callback;
        } elseif (is_string($callback)) {
            return $this->addClassEvent($view, $callback, $prefix);
        }
    }

    /**
     * Add a listener to the event dispatcher.
     *
     * @param string $name
     * @param \Closure $callback
     * @return void
     */
    protected function addEventListener(string $name, $callback)
    {
        if (Str::contains($name, '*')) {
            $callback = function ($name, array $data) use ($callback) {
                return $callback($data[0]);
            };
        }

        $this->events->listen($name, $callback);
    }

    /**
     * Register a class based view composer.
     *
     * @param  string    $view
     * @param  string    $class
     * @param  string    $prefix
     * @return \Closure
     */
    protected function addClassEvent($view, $class, $prefix)
    {
        $name = $prefix.$view;

        // When registering a class based view "composer", we will simply resolve the
        // classes from the application IoC container then call the compose method
        // on the instance. This allows for convenient, testable view composers.
        $callback = $this->buildClassEventCallback(
            $class, $prefix
        );

        $this->addEventListener($name, $callback);

        return $callback;
    }

    /**
     * Build a class based container callback Closure.
     *
     * @param  string  $class
     * @param  string  $prefix
     * @return \Closure
     */
    protected function buildClassEventCallback($class, $prefix)
    {
        [$class, $method] = $this->parseClassEvent($class, $prefix);

        // Once we have the class and method name, we can build the Closure to resolve
        // the instance out of the IoC container and call the method on it with the
        // given arguments that are passed to the Closure as the composer's data.
        return function () use ($class, $method) {
            return call_user_func_array(
                [$this->container->make($class), $method], func_get_args()
            );
        };
    }

    /**
     * Parse a class based composer name.
     *
     * @param  string  $class
     * @param  string  $prefix
     * @return array
     */
    protected function parseClassEvent($class, $prefix)
    {
        return Str::parseCallback($class, $this->classEventMethodForPrefix($prefix));
    }

    /**
     * Determine the class event method based on the given prefix.
     *
     * @param  string  $prefix
     * @return string
     */
    protected function classEventMethodForPrefix($prefix)
    {
        return Str::contains($prefix, 'composing') ? 'compose' : 'create';
    }
    /**
     * Call the composer for a given view.
     *
     * @param View $view
     * @return void
     */
    public function callComposer(View $view)
    {
        $this->events->dispatch('composing: ' . $view->getView(), [$view]);
    }

    /**
     * Set the IoC container instance.
     *
     * @param Application $container
     * @return void
     */
    public function setContainer(Application $container)
    {
        $this->container = $container;
    }

    /**
     * Get all of the shared data for the environment.
     *
     * @return array
     */

    public function getShared()
    {
        return $this->shared;
    }
}