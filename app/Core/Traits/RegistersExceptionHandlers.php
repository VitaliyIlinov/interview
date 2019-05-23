<?php

namespace app\Core\Traits;

use app\contracts\Debug\ExceptionHandler;
use app\Core\Request;
use app\Exceptions\FatalErrorException;
use ErrorException;
use HttpException;

trait RegistersExceptionHandlers
{
    /**
     * Throw an HttpException with the given data.
     *
     * @param int $code
     * @param string $message
     * @param array $headers
     * @return void
     *
     * @throws HttpException
     */
    public function abort($code, $message = '', array $headers = [])
    {
        if ($code == 404) {
            throw new HttpException($message);
        }

        throw new HttpException($code, $message, null, $headers);
    }

    /**
     * Set the error handling for the application.
     *
     * @return void
     */
    protected function registerErrorHandling()
    {
        error_reporting(-1);
        //ini_set('display_errors', 1);

        set_error_handler(function ($level, $message, $file = '', $line = 0) {
            if (error_reporting() & $level) {
                throw new ErrorException($message, 0, $level, $file, $line);
            }
        });

        set_exception_handler(function ($e) {
            $this->handleUncaughtException($e);
        });

        register_shutdown_function(function () {
            $this->handleShutdown();
        });
    }

    /**
     * Handle the application shutdown routine.
     *
     * @return void
     */
    protected function handleShutdown()
    {
        if (!is_null($error = error_get_last())) {
            $this->handleUncaughtException(new FatalErrorException(
                $error['message'], $error['type'], 0, $error['file'], $error['line']
            ));
        }
    }

    /**
     * Handle an uncaught exception instance.
     *
     * @param \Throwable $e
     * @return void
     */
    protected function handleUncaughtException(\Throwable $e)
    {
        /**
         * @var $handler ExceptionHandler
         */
        var_dump($e);
        return;
        $handler = app(ExceptionHandler::class);
        var_dump($e);
        $handler->report($e);

        $handler->render(app(Request::class), $e)->send();
    }

    /**
     * Determine if the error type is fatal.
     *
     * @param int $type
     * @return bool
     */
    protected function isFatalError($type)
    {
        $errorCodes = [E_ERROR, E_CORE_ERROR, E_COMPILE_ERROR, E_PARSE];

        if (defined('FATAL_ERROR')) {
            $errorCodes[] = FATAL_ERROR;
        }

        return in_array($type, $errorCodes);
    }
}
