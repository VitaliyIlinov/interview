<?php


namespace app\support\Facades;

/**
 * Class Request
 * @package app\support\Facades
 * @mixin \app\Core\Request
 */
class Request extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \app\Core\Request::class;
    }
}