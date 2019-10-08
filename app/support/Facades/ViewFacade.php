<?php

namespace app\support\Facades;

use app\Core\View\Support\ViewFactory;

/**
 * Class View
 * @package app\support\Facades
 * @method static ViewFactory share(array|string $key, $value = null): void
 * @method static ViewFactory exists(string $view): bool
 * @method static ViewFactory composer(string|array $views,string|\Closure $callback) before render
 */
class ViewFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'view';
    }
}