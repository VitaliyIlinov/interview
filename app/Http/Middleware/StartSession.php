<?php

namespace app\Http\Middleware;

use app\Core\Application;
use app\Core\Cookie;
use app\Core\Request;
use app\Core\Response\BaseResponse;
use app\Core\Response\Response;
use app\Core\Session\SessionManager;
use app\Core\Session\Store;
use Closure;

class StartSession
{
    /**
     * @var Application
     */
    private $manager;

    /**
     * Indicates if the session was handled for the current request.
     *
     * @var bool
     */
    protected $sessionHandled = false;

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
        $this->sessionHandled = true;

        if ($this->sessionConfigured()) {
            $request->setLaravelSession(
                $session = $this->sessionStart($request)
            );
            $this->collectGarbage($session);
        }

        $response = $next($request);

        if ($this->sessionConfigured()) {
            $this->storeCurrentUrl($request, $session);

            $this->addCookieToResponse($response, $session);
        }

        return $response;
    }

    public function terminate($request, $response)
    {
        if ($this->sessionHandled && $this->sessionConfigured()) {
            $this->manager->driver()->save();
        }
    }

    protected function sessionStart(Request $request): Store
    {
        return tap($this->getSession($request), function ($session) {
            /**@var $session Store */
            $session->start();
        });
    }

    public function getSession(Request $request)
    {
        return tap($this->manager->driver(), function ($session) use ($request) {
            /**@var $session Store */
            $session->setId($request->cookies->get($session->getName()));
        });
    }

    /**
     * Determine if a session driver has been configured.
     *
     * @return bool
     */
    protected function sessionConfigured()
    {
        return !is_null($this->manager->getSessionConfig()['driver'] ?? null);
    }

    protected function collectGarbage(Store $session)
    {
        $config = $this->manager->getSessionConfig();

        // Here we will see if this request hits the garbage collection lottery by hitting
        // the odds needed to perform garbage collection on any given request. If we do
        // hit it, we'll call this handler to let it delete all the expired sessions.
        if ($this->configHitsLottery($config)) {
            $session->getHandler()->gc($this->getSessionLifetimeInSeconds());
        }
    }

    /**
     * Store the current URL for the request if necessary.
     *
     * @param Request $request
     * @param $session
     */
    protected function storeCurrentUrl(Request $request, Store $session)
    {
        if ($request->getMethod() === Request::METHOD_GET && !$request->isAjax()) {
            $session->setPreviousUrl($request->fullUrl());
        }
    }

    protected function addCookieToResponse(BaseResponse $response, Store $session)
    {
        $response->headers->setCookie(new Cookie(
            $session->getName(), $session->getId(), time() + $this->getSessionLifetimeInSeconds()
        ));
    }

    /**
     * Determine if the configuration odds hit the lottery.
     *
     * @param array $config
     * @return bool
     * @throws \Exception
     */
    protected function configHitsLottery(array $config)
    {
        return random_int(1, $config['lottery'][1]) <= $config['lottery'][0];
    }

    /**
     * Get the session lifetime in seconds.
     *
     * @return int
     */
    protected function getSessionLifetimeInSeconds()
    {
        return ($this->manager->getSessionConfig()['lifetime'] ?? null) * 60;
    }
}