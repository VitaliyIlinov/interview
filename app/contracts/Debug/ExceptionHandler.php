<?php

namespace app\contracts\Debug;

use app\Core\Request;
use app\Core\Response\BaseResponse;
use Throwable;

interface ExceptionHandler
{
    /**
     * Report or log an exception.
     *
     * @param  Throwable  $e
     * @return void
     */
    public function report(Throwable $e);

    /**
     * Determine if the exception should be reported.
     *
     * @param  Throwable  $e
     * @return bool
     */
    public function shouldReport(Throwable $e): bool;

    /**
     * Render an exception into an HTTP response.
     *
     * @param  Request  $request
     * @param  Throwable  $e
     * @return BaseResponse
     */
    public function render(Request $request, Throwable $e): BaseResponse;
}