<?php

namespace app\support\Facades;

use app\Core\View\Support\ViewFactory;

/**
 * Class View
 * @package app\support\Facades
 * @mixin ViewFactory
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