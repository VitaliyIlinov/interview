<?php

namespace app\Core;

/**
 * Class ClassLoader
 * @package app\Core
 */
class ClassLoader
{
    public static function loadClassLoader($class)
    {
        require ROOT . DIRECTORY_SEPARATOR . str_replace('\\', '/', $class) . '.php';
    }

    public static function getLoader()
    {
        spl_autoload_register([self::class, 'loadClassLoader'], true, true);
    }
}

ClassLoader::getLoader();