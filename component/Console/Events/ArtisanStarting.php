<?php

namespace component\Console\Events;

use component\Console\Application;

class ArtisanStarting
{
    /**
     * @var Application
     */
    private $app;

    /**
     * ArtisanStarting constructor.
     *
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }
}