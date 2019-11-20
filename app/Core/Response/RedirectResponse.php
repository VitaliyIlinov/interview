<?php

namespace app\Core\Response;

use app\Core\Request;
use app\Core\Session\Store;

class RedirectResponse extends Response
{
    protected $targetUrl;

    /**
     * The application instance.
     *
     * @var Store
     */
    protected $session;

    /**
     * The request instance.
     *
     * @var Request
     */
    protected $request;

    public function __construct(?string $url, int $status = 302, array $headers = [])
    {
        parent::__construct('', $status, $headers);

        $this->setTargetUrl($url);

        if (!$this->isRedirect()) {
            throw new \InvalidArgumentException(sprintf('The HTTP status code is not a redirect ("%s" given).',
                $status));
        }

        if (301 == $status && !\array_key_exists('cache-control', $headers)) {
            $this->headers->remove('cache-control');
        }
    }

    /**
     * Is the response a redirect of some form?
     *
     * @final
     *
     * @param string|null $location
     *
     * @return bool
     */
    public function isRedirect(?string $location = null): bool
    {
        return \in_array($this->statusCode,
                [201, 301, 302, 303, 307, 308]) && (null === $location ?: $location == $this->headers->get('Location'));
    }

    /**
     * Sets the redirect target of this response.
     *
     * @param string $url The URL to redirect to
     *
     * @return RedirectResponse
     * @throws \InvalidArgumentException
     */
    public function setTargetUrl($url)
    {
        if (empty($url)) {
            throw new \InvalidArgumentException('Cannot redirect to an empty URL.');
        }

        $this->targetUrl = $url;

        $this->setContent(
            sprintf('<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url=%1$s" />

        <title>Redirecting to %1$s</title>
    </head>
    <body>
        Redirecting to <a href="%1$s">%1$s</a>.
    </body>
</html>', htmlspecialchars($url, ENT_QUOTES, 'UTF-8')));

        $this->headers->set('Location', $url);

        return $this;
    }

    /**
     * Set the request instance.
     *
     * @param Request $request
     *
     * @return void
     */
    public function setRequest(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @param Store $session
     */
    public function setSession(Store $session): void
    {
        $this->session = $session;
    }

    /**
     * Flash a piece of data to the session.
     *
     * @param string|array $key
     * @param mixed $value
     *
     * @return static
     */
    public function with($key, $value = null)
    {
        $key = is_array($key) ? $key : [$key => $value];

        foreach ($key as $k => $v) {
            $this->session->flash($k, $v);
        }

        return $this;
    }
}