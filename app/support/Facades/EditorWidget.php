<?php

namespace app\support\Facades;

use app\Widgets\Editor\Editor;

/**
 * Class File
 *
 * @package app\support\Facades
 * @mixin Editor
 */
class EditorWidget extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Editor::class;
    }
}