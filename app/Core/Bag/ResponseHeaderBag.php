<?php

namespace app\Core\Bag;

use app\Core\Cookie;

class ResponseHeaderBag extends HeaderBag
{
    protected $cookies = [];

    public function __construct(array $headers = [])
    {
        parent::__construct($headers);

        if (!isset($this->headers['cache-control'])) {
            $this->set('Cache-Control', '');
        }
    }

    public function setCookie(Cookie $cookie)
    {
        $this->cookies[$cookie->getName()] = $cookie;
    }

    /**
     * Returns an array with all cookies.
     *
     * @return array
     */
    public function getCookies()
    {
        return $this->cookies;
    }
}