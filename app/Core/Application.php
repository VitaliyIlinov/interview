<?php

namespace app\Core;

use app\Core\Traits\RegistersExceptionHandlers;

class Application
{
    use RegistersExceptionHandlers;

    /**
     * The base path of the application installation.
     *
     * @var string
     */
    protected $basePath;

    /**
     * The Router instance.
     *
     * @var Router
     */
    public $router;


    public function __construct($basePath)
    {
        $this->basePath = $basePath;
        $this->registerErrorHandling();
        $this->bootstrapRouter();
//        $this->bootstrapRequest();
    }

    /**
     * @return void
     */
    public function bootstrapRouter()
    {
        $this->router = new Router($this);
    }

    /**
     * Determine if the application is running in the console.
     *
     * @return bool
     */
    public function runningInConsole()
    {
        return php_sapi_name() === 'cli' || php_sapi_name() === 'phpdbg';
    }


//    /**
//     * @return void
//     */
//    public function bootstrapRequest()
//    {
//        $this->request = new Request();
//    }
}