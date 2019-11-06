<?php

namespace app\Exceptions;

use Exception;

class NotFoundHttpException extends Exception
{
    /**
     * @param string     $message  The internal exception message
     * @param \Exception $previous The previous exception
     * @param int        $code     The internal exception code
     * @param array      $headers
     */
    public function __construct(string $message = 'Not found route info', Exception $previous = null, int $code = 404, array $headers = [])
    {
        parent::__construct($message, $code, $previous);
    }
}