<?php

namespace app\Http\Middleware;

use app\Core\Request;

class Permission
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param \Closure $next
     * @param string $role
     * @return mixed
     */
    public function handle(Request $request, \Closure $next, string $role)
    {
        return $next($request);
    }
}