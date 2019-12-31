<?php

namespace app\support\Facades;

use app\Widgets\TodoList\ToDo;

/**
 * Class File
 *
 * @package app\support\Facades
 * @mixin ToDo
 */
class ToDoWidget extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ToDo::class;
    }
}