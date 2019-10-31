<?php

namespace app\support\Facades;

use app\helpers\Filesystem;

/**
 * Class File
 *
 * @package app\support\Facades
 * @mixin Filesystem
 */
class File extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'files';
    }
}