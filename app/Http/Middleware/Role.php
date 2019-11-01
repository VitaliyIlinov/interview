<?php

namespace app\Http\Middleware;

use app\Core\Request;

class Role
{
    private const CREDENTIAL = [
        'login' => 'admin',
        'pass'  => 'admin',
    ];

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

        if (session()->get('password') !== self::CREDENTIAL['pass'] ||
            session()->get('login') !== self::CREDENTIAL['login']) {
            return redirect('admin_panel/login');
        }

        return $next($request);
    }
}