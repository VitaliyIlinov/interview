<?php

if (!function_exists('abort')) {
    /**
     * Throw an HttpException with the given data.
     *
     * @param int $code
     * @param string $message
     * @param array $headers
     * @return void
     *
     */
    function abort($code, $message = '', array $headers = [])
    {
        return __FUNCTION__;
    }
}