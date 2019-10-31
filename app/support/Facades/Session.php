<?php

namespace app\support\Facades;

use app\Core\Session\SessionManager;

/**
 * Class Session
 *
 * @package app\support\Facades
 * @mixin SessionManager
 */
class Session extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'session';
    }
}