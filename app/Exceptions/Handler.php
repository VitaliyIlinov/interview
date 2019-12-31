<?php

namespace app\Exceptions;

use app\contracts\Debug\ExceptionHandler;
use app\contracts\Support\Responsable;
use app\Core\Application;
use app\Core\Debug\ExceptionHandler as ExceptionHandlerDebug;
use app\Core\Request;
use app\Core\Response\BaseResponse;
use app\Core\Response\JsonResponse;
use app\Core\Response\Response;
use app\helpers\Arr;
use Throwable;

class Handler implements ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [];

    /**
     * @var Application
     */
    protected $application;

    /**
     * Handler constructor.
     *
     * @param Application $application
     */
    public function __construct(Application $application)
    {
        $this->application = $application;
    }

    public function report(Throwable $e)
    {
        if ($this->shouldReport($e)) {
            return;
        }
        if (method_exists($e, 'report')) {
            return $e->report();
        }
//        try {
//            $logger = $this->container->make(LoggerInterface::class);
//        } catch (Exception $ex) {
//            throw $e;
//        }
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

    public function render(Request $request, Throwable $e): BaseResponse
    {
        if ($e instanceof Responsable) {
            return $e->toResponse($request);
        }
        return $request->isAjax()
            ? $this->prepareJsonResponse($request, $e)
            : $this->prepareResponse($request, $e);
    }

    /**
     * Prepare a JSON response for the given exception.
     *
     * @param Request   $request
     * @param Throwable $e
     * @return Response
     */
    protected function prepareResponse(Request $request, Throwable $e): Response
    {
        return new Response(
            $this->renderExceptionContent($e, config('app.debug')),
            !$e->getCode() == 0 ? $e->getCode() : 500,
            $request->headers->all()
        );
    }

    /**
     * Convert the given exception to an array.
     *
     * @param \Throwable $e
     * @return array
     */
    protected function convertExceptionToArray(Throwable $e)
    {
        return config('app.debug') ? [
            'message' => $e->getMessage(),
            'exception' => get_class($e),
            'file' => $e->getFile(),
            'line' => $e->getLine(),
            'trace' => array_map(function ($trace) {
                return Arr::except($trace, ['args']);
            }, $e->getTrace()),
        ] : [
            'message' => $e->getMessage(),
        ];
    }

    /**
     * Prepare a JSON response for the given exception.
     *
     * @param Request   $request
     * @param Throwable $e
     * @return JsonResponse
     */
    protected function prepareJsonResponse(Request $request, Throwable $e): JsonResponse
    {
        return new JsonResponse(
            $this->convertExceptionToArray($e),
            !$e->getCode() == 0 ? $e->getCode() : 404,
            [],
            JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
        );
    }

    /**
     * Gets the HTML content associated with the given exception.
     *
     * @param Throwable $e
     * @param bool      $debug
     * @return string
     */
    private function renderExceptionContent(Throwable $e, bool $debug = true): string
    {
        return (new ExceptionHandlerDebug($debug))->getHtml($e);
    }
}