<?php

namespace app\Http\Middleware;


use app\Core\Request;

class ExampleMiddleware1
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
        $request->query->set('wer',789);
        return $next($request);
    }
}