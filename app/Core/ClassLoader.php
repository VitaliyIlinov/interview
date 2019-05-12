<?php

namespace app\Core;

/**
 * Class ClassLoader
 * @package app\Core
 */
class ClassLoader
{
    public static $loadedFiles;

    public static $files = [
        'app/helpers/helpers.php',
    ];

    public static function requireFile($file)
    {
        $file = ROOT . DIRECTORY_SEPARATOR . $file;
        require_once $file;
        self::$loadedFiles[$file] = $file;
    }

    public static function loadClassLoader($class)
    {
        self::requireFile(str_replace('\\', '/', $class) . '.php');
    }

    public static function getLoader()
    {
        spl_autoload_register([self::class, 'loadClassLoader'], true, true);
        self::includesFiles(self::$files);
    }

    public static function includesFiles(array $files)
    {
        foreach ($files as $file) {
            self::requireFile($file);
        }
    }
}

ClassLoader::getLoader();