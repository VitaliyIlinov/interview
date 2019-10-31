<?php

namespace app\Core\Router;

use app\Core\Application;

class Redirector
{
    /**
     * The application instance.
     *
     * @var Application
     */
    protected $app;

    /**
     * Redirector constructor.
     *
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * Create a new redirect response to the given path.
     *
     * @param  string  $path
     * @param  int     $status
     * @param  array   $headers
     * @param  bool    $secure
     * @return \Illuminate\Http\RedirectResponse
     */
    public function to($path, $status = 302, $headers = [], $secure = null)
    {
        $path = $this->app->make('url')->to($path, [], $secure);

        return $this->createRedirect($path, $status, $headers);
    }
}