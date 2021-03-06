<?php

namespace app\Http\Middleware;

use app\Exceptions\NotFoundHttpException;
use app\Models\User;
use app\Core\Request;
use Closure;

class Role
{
    /**
     * @var User
     */
    private $user;

    /**
     * Role constructor.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @param string $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        if (!$this->user->hasRole($role)) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}