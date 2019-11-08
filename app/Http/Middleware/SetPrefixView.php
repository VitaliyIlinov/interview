<?php

namespace app\Http\Middleware;

use app\Core\Request;
use app\support\Facades\ViewFacade;

class SetPrefixView
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param \Closure $next
     * @param string $prefix
     *
     * @return mixed
     */
    public function handle(Request $request, \Closure $next, string $prefix)
    {
        ViewFacade::setViewPrefix($prefix);
        return $next($request);
    }
}