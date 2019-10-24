<?php

namespace app\Http\Middleware;

use app\Core\Application;
use app\Core\Request;
use app\Core\Session\SessionManager;
use app\helpers\Str;
use Closure;
use InvalidArgumentException;

class StartSession
{
    /**
     * @var Application
     */
    private $manager;

    /**
     * StartSession constructor.
     * @param SessionManager $sessionManager
     */
    public function __construct(SessionManager $sessionManager)
    {
        $this->manager = $sessionManager;
    }

    public function handle(Request $request, Closure $next)
    {
//        if ($this->sessionConfigured()) {
//            $request->setLaravelSession(
//                $session = $this->startSession($request)
//            );
//
////            $this->collectGarbage($session);
//        }

        $response = $next($request);
        return $response;
    }

    protected function startSession(Request $request)
    {
        $session = $this->manager->driver();

        return tap($this->getSession($request), function ($session) use ($request) {
            $session->setRequestOnHandler($request);

            $session->start();
        });
    }

    /**
     * Determine if a session driver has been configured.
     *
     * @return bool
     */
    protected function sessionConfigured()
    {
        return ! is_null($this->manager->getSessionConfig()['driver'] ?? null);
    }
}