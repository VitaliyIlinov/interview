<?php

namespace app\Http\Middleware;


use app\Core\Request;

class ExampleMiddleware
{

    public function __construct($auth)
    {
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param \Closure $next
     * @param null $options
     * @return mixed
     */
    public function handle($request, \Closure $next, $options = null)
    {
        return $next($request);
    }
}