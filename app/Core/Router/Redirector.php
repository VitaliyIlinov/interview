<?php

namespace app\Core\Router;

use app\Core\Application;
use app\Core\RedirectResponse;
use app\Core\Session\Store;

class Redirector
{
    /**
     * The application instance.
     *
     * @var UrlGenerator
     */
    protected $urlGenerator;

    /**
     * The application instance.
     *
     * @var Store
     */
    protected $session;

    /**
     * Redirector constructor.
     *
     * @param UrlGenerator $urlGenerator
     */
    public function __construct(UrlGenerator $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    /**
     * Create a new redirect response to the given path.
     *
     * @param string $path
     * @param int $status
     * @param array $headers
     * @param bool $secure
     * @return  RedirectResponse
     */
    public function to($path, $status = 302, $headers = [], $secure = null): RedirectResponse
    {
        $path = $this->urlGenerator->to($path, [], $secure);

        return $this->createRedirect($path, $status, $headers);
    }

    /**
     * Create a new redirect response to a named route.
     *
     * @param string $route
     * @param array $parameters
     * @param int $status
     * @param array $headers
     * @return RedirectResponse
     */
    public function route($route, $parameters = [], $status = 302, $headers = [])
    {
        $path = $this->urlGenerator->route($route, $parameters);

        return $this->to($path, $status, $headers);
    }

    /**
     * Create a new redirect response.
     *
     * @param string $path
     * @param int $status
     * @param array $headers
     * @return RedirectResponse
     */
    protected function createRedirect($path, $status, $headers)
    {
        return tap(new RedirectResponse($path, $status, $headers), function ($redirectResponse) {
            /**@var $redirectResponse RedirectResponse */
            if (isset($this->session)) {
                $redirectResponse->setSession($this->session);
            }

            $redirectResponse->setRequest($this->urlGenerator->getRequest());
        });
    }

    /**
     * @param Store $session
     */
    public function setSession(Store $session): void
    {
        $this->session = $session;
    }

}