<?php

namespace app\Core\Bag;

class ResponseHeaderBag extends HeaderBag
{
    public function __construct(array $headers = [])
    {
        parent::__construct($headers);
        if (!isset($this->headers['cache-control'])) {
            $this->set('Cache-Control', '');
        }
    }
}