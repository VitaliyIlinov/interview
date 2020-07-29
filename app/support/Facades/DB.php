<?php

namespace app\support\Facades;

use app\Core\Database\DatabaseManager;

/**
 * Class DB
 *
 * @package app\support\Facades
 * @mixin DatabaseManager
 */
class DB extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'db';
    }
}
