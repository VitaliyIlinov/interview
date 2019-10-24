<?php

namespace app\Http\Middleware;


use app\Core\Request;

class ExampleMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param \Closure $next
     * @param null $options
     * @return mixed
     */
    public function handle(Request $request, \Closure $next, $options = null)
    {
        $response = $next($request);

        return $response;
    }
}