<?php

namespace app\Exceptions;

use app\contracts\Debug\ExceptionHandler;
use app\Core\Request;
use app\Core\Response;
use Throwable;

class Handler implements ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [];

    public function report(Throwable $e): void
    {
        if ($this->shouldReport($e)) {
            return;
        }
        //todo put to log
    }

    public function shouldReport(Throwable $e): bool
    {
        foreach ($this->dontReport as $type) {
            if ($e instanceof $type) {
                return true;
            }
        }

        return false;
    }

    public function render(Request $request, Throwable $e): Response
    {
        return new Response(
            $this->getContent($e),
            $e->getCode(),
            $request->headers->all()
        );
    }

    /**
     * Gets the HTML content associated with the given exception.
     *
     * @param Throwable $e
     * @return string
     */
    private function getContent(Throwable $e): string
    {
        return $e->getMessage() . "<br><pre>" . print_r($e->getTrace(), true) . '</pre>';
    }
}