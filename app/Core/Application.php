<?php

namespace app\Core;

use app\Core\Traits\RegistersExceptionHandlers;
use app\Exceptions\HttpResponseException;
use app\Exceptions\MethodNotAllowed;
use app\Exceptions\NotFoundHttpException;
use app\helpers\Filesystem;
use app\Providers\ServiceProvider;
use app\support\Facades\Facade;
use config\Repository as ConfigRepository;

class Application extends Container
{
    use RegistersExceptionHandlers;
    public const NOT_FOUND = 0;
    public const METHOD_NOT_ALLOWED = 2;
    public const FOUND = 1;

    /**
     * All of the global middleware for the application.
     *
     * @var array
     */
    protected $middleware = [];

    /**
     * All allowed middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [];

    /**
     * Indicates if the application has "booted".
     *
     * @var bool
     */
    protected $booted = false;

    /**
     * The loaded service providers.
     *
     * @var array
     */
    protected $loadedProviders = [];

    /**
     * All of the loaded configuration files.
     *
     * @var array
     */
    protected $loadedConfigurations = [];

    /**
     * The registered type aliases.
     *
     * @var string[]
     */
    protected $aliases = [];

    /**
     * The base path of the application installation.
     *
     * @var string
     */
    private $basePath;

    /**
     * The Router instance.
     *
     * @var Router
     */
    public $router;

    /**
     * The current route being dispatched.
     *
     * @var array
     */
    protected $currentRoute;

    public function __construct(string $basePath)
    {
        $this->setBasePath($basePath);

        $this->bootstrapContainer();

        $this->registerBaseBindings();
        $this->registerErrorHandling();
        $this->bootstrapRouter();
    }

    /**
     * Set the base path for the application.
     *
     * @param string $basePath
     */
    private function setBasePath(string $basePath)
    {
        $this->basePath = rtrim($basePath, '\/');
    }

    /**
     * Register the basic bindings into the container.
     *
     * @return void
     */
    private function registerBaseBindings()
    {
        static::setInstance($this);

        $this->instance(self::class, $this);

        $this->instance('env', config('app.env', 'production'));
    }

    /**
     * Bootstrap the application container.
     *
     * @return void
     */
    private function bootstrapContainer()
    {
        $this->registerConfigBindings();
        $this->registerViewBindings();
        $this->registerFilesBindings();
        $this->registerEventsBindings();
    }

    /**
     * Get the path to the application "app" directory.
     *
     * @return string
     */
    public function path()
    {
        return $this->basePath . DIRECTORY_SEPARATOR . 'app';
    }

    /**
     * Get the base path for the application.
     *
     * @param string|null $path
     * @return string
     */
    public function getBasePath($path = null): string
    {
        return $this->basePath . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }

    /**
     * Register the core container aliases.
     *
     * @return void
     */
    protected function registerContainerAliases()
    {
        $this->aliases = [
            //
        ];
    }

    /**
     * @return void
     */
    private function bootstrapRouter()
    {
        $this->router = new Router($this);
    }

    /**
     * Register container bindings for the application.
     *
     * @return void
     */
    private function registerConfigBindings()
    {
        $this->singleton('config', function () {
            return new ConfigRepository;
        });
    }

    /**
     * Register the facades for the application.
     *
     * @param bool $aliases
     * @param array $userAliases
     * @return void
     */
    public function withFacades($aliases = true, $userAliases = [])
    {
        Facade::setFacadeApplication($this);
    }

    /**
     * Resolve the given type from the container.
     *
     * @param string $abstract
     * @param array $parameters
     * @return mixed
     */
    public function make($abstract, $parameters = [])
    {
        if (isset($this->instances[$abstract])) {
            return $this->instances[$abstract];
        }
        return parent::make($abstract, $parameters);
    }

    /**
     * Register container bindings for the application.
     *
     * @return void
     */
    private function registerViewBindings()
    {
        $this->singleton('view', function () {
            return $this->loadComponent('view', 'app\Core\View\ViewServiceProvider');
        });
    }

    /**
     * Register container bindings for the application.
     *
     * @return void
     */
    private function registerFilesBindings()
    {
        $this->singleton('files', function () {
            return new Filesystem;
        });
    }

    /**
     * Register container bindings for the application.
     *
     * @return void
     */
    private function registerEventsBindings()
    {
        $this->singleton('events', function () {
            $this->register('app\Providers\EventServiceProvider');

            return $this->make('events');
        });
    }

    /**
     * Configure and load the given component and provider.
     *
     * @param string $config
     * @param array|string $providers
     * @param string|null $return
     * @return mixed
     */
    public function loadComponent($config, $providers, $return = null)
    {
        $this->configure($config);

        foreach ((array)$providers as $provider) {
            $this->register($provider);
        }

        return $this->make($return ?: $config);
    }

    /**
     * Load a configuration file into the application.
     *
     * @param string $name
     * @return void
     */
    public function configure($name)
    {
        if (isset($this->loadedConfigurations[$name])) {
            return;
        }

        $this->loadedConfigurations[$name] = true;

        $path = $this->getConfigurationPath($name);

        if ($path) {
            $this->make('config')->set($name, require $path);
        }
    }

    /**
     * Get the path to the given configuration file.
     *
     * If no name is provided, then we'll return the path to the config folder.
     *
     * @param string|null $name
     * @return string
     */
    public function getConfigurationPath($name = null): ?string
    {
        $appConfigPath = $this->basePath . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . $name . '.php';
        if (file_exists($appConfigPath)) {
            return $appConfigPath;
        }
        return null;
    }

    /**
     * Add new middleware to the application.
     *
     * @param \Closure|array $middleware
     * @return $this
     */
    public function middleware($middleware)
    {
        if (!is_array($middleware)) {
            $middleware = [$middleware];
        }

        $this->middleware = array_unique(array_merge($this->middleware, $middleware));

        return $this;
    }

    /**
     * Define the route middleware for the application.
     *
     * @param array $middleware
     * @return $this
     */
    public function routeMiddleware(array $middleware)
    {
        $this->routeMiddleware = array_merge($this->routeMiddleware, $middleware);

        return $this;
    }

    /**
     * Run the application and send the response.
     *
     * @param null $request
     * @return void
     */
    public function run($request = null)
    {
        $response = $this->dispatch($request);
        if ($response instanceof Response) {
            $response->send();
        } else {
            echo (string)$response;
        }
    }

    /**
     * Dispatch the incoming request.
     *
     * @param null $request
     * @return Response
     */
    public function dispatch($request = null)
    {
        list($method, $pathInfo) = $this->parseIncomingRequest($request);

        $this->boot();

        return $this->sendThroughPipeline($this->middleware, function () use ($method, $pathInfo) {

            if (isset($this->router->getRoutes()[$method . $pathInfo])) {
                return $this->handleFoundRoute([true, $this->router->getRoutes()[$method . $pathInfo]['action'], []]);
            }

            return $this->handleRoute(
                $this->getRouteByPattern($method, $pathInfo)
            );
        });
    }

    /**
     * Handle the response from the FastRoute dispatcher.
     *
     * @param array $routeInfo
     * @return mixed
     * @throws MethodNotAllowed
     * @throws NotFoundHttpException
     * @throws \ReflectionException
     */
    protected function handleRoute($routeInfo)
    {
        switch ($routeInfo[0]) {
            case self::NOT_FOUND:
                throw new NotFoundHttpException;
            case self::METHOD_NOT_ALLOWED:
                throw new MethodNotAllowed($routeInfo[1]);
            case self::FOUND:
                return $this->handleFoundRoute($routeInfo);
        }
    }

    /**
     * @param string $method
     * @param string $routeInfo
     * @return mixed
     */
    protected function getRouteByPattern(string $method, $routeInfo)
    {
        foreach ($this->router->getRoutes() as $v) {
            $str = preg_replace('/(\{)(.*?)(\})/', '(?P<$2>[^\/]*?)', $v['method'] . $v['uri']);
            if (preg_match("#^{$str}$#", $method . $routeInfo, $args)) {
                $params = array_filter($args, function ($v, $k) {
                    return is_string($k);
                }, ARRAY_FILTER_USE_BOTH);
                return [self::FOUND, $v['action'], $params];
            }
        }
        return [self::NOT_FOUND];
    }

    /**
     * Send the request through the pipeline with the given callback.
     *
     * @param array $middleware
     * @param \Closure $then
     * @return mixed
     */
    protected function sendThroughPipeline(array $middleware, \Closure $then)
    {
        if (count($middleware) > 0) {
//            var_dump(__FUNCTION__);
//            return (new Pipeline($this))
//                ->send('')
//                ->through($middleware)
//                ->then($then);
        }

        return $then();
    }

    /**
     * Handle a route found by the dispatcher.
     *
     * @param array $routeInfo
     * @return mixed
     * @throws NotFoundHttpException
     * @throws \ReflectionException
     */
    protected function handleFoundRoute($routeInfo)
    {

        $this->currentRoute = $routeInfo;

        $action = $routeInfo[1];
//        if (isset($action['middleware'])) {
//            $middleware = $this->gatherMiddlewareClassNames($action['middleware']);
//
//            return $this->prepareResponse($this->sendThroughPipeline($middleware, function () {
//                return $this->callActionOnArrayBasedRoute($this->currentRoute);
//            }));
//        }

        return $this->prepareResponse(
            $this->callActionOnArrayBasedRoute($routeInfo)
        );
    }

    /**
     * Call the Closure on the array based route.
     *
     * @param array $routeInfo
     * @return mixed
     * @throws NotFoundHttpException
     * @throws \ReflectionException
     */
    protected function callActionOnArrayBasedRoute($routeInfo)
    {
        $action = $routeInfo[1];

        if (isset($action['uses'])) {
            return $this->callControllerAction($routeInfo);
        }

        foreach ($action as $value) {
            if ($value instanceof \Closure) {
                $closure = $value;
                break;
            }
        }

        try {
            return $this->call($closure, $routeInfo[2]);
        } catch (HttpResponseException $e) {
            return $e->getResponse();
        }
    }

    /**
     * Call a controller based route.
     *
     * @param array $routeInfo
     * @return mixed
     * @throws NotFoundHttpException
     */
    protected function callControllerAction($routeInfo)
    {
        $uses = $routeInfo[1]['uses'];

        list($controller, $method) = explode('@', $uses);

        if (!method_exists($instance = $this->make($controller), $method)) {
            throw new NotFoundHttpException;
        }

        return $this->callControllerCallable([$instance, $method], $routeInfo[2]);
    }

    /**
     * Call a controller callable and return the response.
     *
     * @param callable $callable
     * @param array $parameters
     * @return Response
     */
    protected function callControllerCallable(callable $callable, array $parameters = [])
    {
        try {
            return $this->call($callable, $parameters);
        } catch (HttpResponseException $e) {
            return $e->getResponse();
        }
    }

    protected function call(callable $callback, array $parameters = [])
    {
        return call_user_func_array(
            $callback, static::getMethodDependencies($this, $callback, $parameters)
        );
    }

    /**
     * Get all dependencies for a given method.
     *
     * @param $container
     * @param callable|string $callback
     * @param array $parameters
     * @return void
     *
     * @throws \ReflectionException
     */
    protected static function getMethodDependencies($container, $callback, array $parameters = [])
    {
        $dependencies = [];
        foreach (static::getCallReflector($callback)->getParameters() as $parameter) {
            static::addDependencyForCallParameter($container, $parameter, $parameters, $dependencies);
        }
        return array_merge($dependencies, $parameters);
    }

    /**
     * Get the dependency for the given call parameter.
     *
     * @param $container
     * @param \ReflectionParameter $parameter
     * @param array $parameters
     * @param array $dependencies
     * @return void
     * @throws \ReflectionException
     */
    protected static function addDependencyForCallParameter($container, $parameter, array &$parameters, &$dependencies)
    {
        if (array_key_exists($parameter->name, $parameters)) {
            $dependencies[] = $parameters[$parameter->name];

            unset($parameters[$parameter->name]);
        } elseif ($parameter->getClass() && array_key_exists($parameter->getClass()->name, $parameters)) {
            $dependencies[] = $parameters[$parameter->getClass()->name];

            unset($parameters[$parameter->getClass()->name]);
        } elseif ($parameter->getClass()) {
            $dependencies[] = $container->make($parameter->getClass()->name);
        } elseif ($parameter->isDefaultValueAvailable()) {
            $dependencies[] = $parameter->getDefaultValue();
        }
    }

    /**
     * Get the proper reflection instance for the given callback.
     *
     * @param callable|string $callback
     * @return \ReflectionFunctionAbstract
     *
     * @throws \ReflectionException
     */
    protected static function getCallReflector($callback)
    {
        if (is_string($callback) && strpos($callback, '::') !== false) {
            $callback = explode('::', $callback);
        }

        return is_array($callback)
            ? new \ReflectionMethod($callback[0], $callback[1])
            : new \ReflectionFunction($callback);
    }

    /**
     * Prepare the response for sending.
     *
     * @param mixed $response
     * @return Response
     */
    public function prepareResponse($response)
    {
        $request = app(Request::class);

        if (!$response instanceof Response) {
            $response = new Response($response);
        }
        return $response->prepare($request);
    }

    /**
     * Gather the full class names for the middleware short-cut string.
     *
     * @param string $middleware
     * @return array
     */
    protected function gatherMiddlewareClassNames($middleware)
    {
        return is_string($middleware) ? explode('|', $middleware) : (array)$middleware;
    }

    /**
     * Parse the incoming request and return the method and path info.
     *
     * @param Request|null $request
     * @return array
     */
    protected function parseIncomingRequest($request)
    {
        if (!$request) {
            $request = Request::createFromGlobals();
        }
        $this->instance(Request::class, $request);

        return [$request->getMethod(), '/' . trim($request->getPathInfo(), '/')];
    }

    /**
     * Register a service provider with the application.
     *
     * @param ServiceProvider|string $provider
     */
    public function register($provider)
    {
        if (!$provider instanceof ServiceProvider) {
            $provider = new $provider($this);
        }

        if (array_key_exists($providerName = get_class($provider), $this->loadedProviders)) {
            return;
        }

        $this->loadedProviders[$providerName] = $provider;

        if (method_exists($provider, 'register')) {
            $provider->register();
        }

        if ($this->booted) {
            $this->bootProvider($provider);
        }
    }

    /**
     * Boots the registered providers.
     */
    public function boot()
    {
        if ($this->booted) {
            return;
        }

        array_walk($this->loadedProviders, function ($p) {
            $this->bootProvider($p);
        });

        $this->booted = true;
    }

    /**
     * Boot the given service provider.
     *
     * @param ServiceProvider $provider
     * @return mixed
     */
    protected function bootProvider(ServiceProvider $provider)
    {
        if (method_exists($provider, 'boot')) {
            return $this->call([$provider, 'boot']);
//            return call_user_func_array($provider, 'boot');
        }
    }
}