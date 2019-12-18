<?php

namespace app\Core\Bootstrap;

use app\Core\Application;

class LoadEnvironmentVariables
{
    public function bootstrap(Application $application)
    {
        self::LoadEnvironment();
    }

    /**
     * Determine if the given line looks like it's setting a variable.
     *
     * @param string $line
     * @return bool
     */
    private static function isSetter($line)
    {
        return strpos($line, '=') !== false;
    }

    /**
     * Determine if the line in the file is a comment, e.g. begins with a #.
     *
     * @param string $line
     * @return bool
     */
    private static function isComment($line)
    {
        $line = ltrim($line);

        return isset($line[0]) && $line[0] === '#';
    }

    /**
     * Set an environment variable.
     *
     * @param string            $name
     * @param string|null|mixed $value
     * @return void
     */
    public static function setEnvironmentVariable($name, $value = null)
    {
        $_ENV[$name] = $value;
        $_SERVER[$name] = $value;
    }

    public static function getEnvironmentVariable($name, $default = null)
    {
        $value = $_ENV[$name] ?? $default;
        switch (strtolower($value)) {
            case 'true':
            case '(true)':
                return true;
            case 'false':
            case '(false)':
                return false;
            case 'empty':
            case '(empty)':
                return '';
            case 'null':
            case '(null)':
                return;
        }
        return $value;
    }

    /**
     * @param null $file
     */
    public static function LoadEnvironment($file = null)
    {
        $file = ROOT . DIRECTORY_SEPARATOR . ($file ?: '.env');
        if (!self::isFileExist($file)) {
            return;
        }
        $content = @file_get_contents($file);
        $lines = preg_split("/(\r\n|\n|\r)/", $content);
        foreach ($lines as $line) {
            if (!self::isComment($line) && self::isSetter($line)) {
                [$name, $value] = array_map('trim', explode('=', $line, 2));
                if ($value !== '') {
                    self::setEnvironmentVariable($name, $value);
                }
            }
        }
    }

    /**
     * @param string|null $file
     * @return bool
     */
    private static function isFileExist(?string $file = null): bool
    {
        return file_exists($file);
    }
}