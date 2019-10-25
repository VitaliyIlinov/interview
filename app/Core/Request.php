<?php

namespace app\Core;

use app\Core\Bag\FileBag;
use app\Core\Bag\HeaderBag;
use app\Core\Bag\ParameterBag;
use app\Core\Bag\ServerBag;
use app\Core\Session\Store;
use RuntimeException;

class Request
{
    public const METHOD_HEAD = 'HEAD';
    public const METHOD_GET = 'GET';
    public const METHOD_POST = 'POST';
    public const METHOD_PUT = 'PUT';
    public const METHOD_PATCH = 'PATCH';
    public const METHOD_DELETE = 'DELETE';
    public const METHOD_PURGE = 'PURGE';
    public const METHOD_OPTIONS = 'OPTIONS';
    public const METHOD_TRACE = 'TRACE';
    public const METHOD_CONNECT = 'CONNECT';

    /**
     * Custom parameters.
     *
     */
    public $attributes;

    /**
     * Request body parameters ($_POST).
     *
     * @var ParameterBag
     */
    public $request;

    /**
     * Query string parameters ($_GET).
     *
     * @var ParameterBag
     */
    public $query;

    /**
     * Server and execution environment parameters ($_SERVER).
     *
     * @var ServerBag
     */
    public $server;

    /**
     * Uploaded files ($_FILES).
     *
     * @var FileBag
     */
    public $files;

    /**
     * Cookies ($_COOKIE).
     *
     * @var ParameterBag
     */
    public $cookies;

    /**
     * Headers (taken from the $_SERVER).
     *
     * @var HeaderBag
     */
    public $headers;

    /**
     * @var string|resource|false|null
     */
    protected $content;

    /**
     * @var string
     */
    protected $pathInfo;

    /**
     * @var string
     */
    protected $requestUri;

    /**
     * @var string
     */
    protected $baseUrl;

    /**
     * @var string
     */
    protected $basePath;

    /**
     * @var string
     */
    protected $method;

    protected $session;

    protected static $requestFactory;

    /**
     * @param array $query The GET parameters
     * @param array $request The POST parameters
     * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
     * @param array $cookies The COOKIE parameters
     * @param array $files The FILES parameters
     * @param array $server The SERVER parameters
     * @param string|resource|null $content The raw body data
     */
    public function __construct(
        array $query = [],
        array $request = [],
        array $attributes = [],
        array $cookies = [],
        array $files = [],
        array $server = [],
        $content = null)
    {
        $this->initialize($query, $request, $attributes, $cookies, $files, $server, $content);
    }

    /**
     * Sets the parameters for this request.
     *
     * This method also re-initializes all properties.
     *
     * @param array $query The GET parameters
     * @param array $request The POST parameters
     * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
     * @param array $cookies The COOKIE parameters
     * @param array $files The FILES parameters
     * @param array $server The SERVER parameters
     * @param string|resource|null $content The raw body data
     */
    public function initialize(
        array $query = [],
        array $request = [],
        array $attributes = [],
        array $cookies = [],
        array $files = [],
        array $server = [],
        $content = null)
    {
        $this->request = new ParameterBag($request);
        $this->query = new ParameterBag($query);
        $this->attributes = new ParameterBag($attributes);
        $this->cookies = new ParameterBag($cookies);
        $this->files = new FileBag($files);
        $this->server = new ServerBag($server);
        $this->headers = new HeaderBag($this->server->getHeaders());

        $this->content = $content;
        $this->pathInfo = null;
        $this->requestUri = null;
        $this->baseUrl = null;
        $this->basePath = null;
        $this->method = null;
    }

    /**
     * Sets a callable able to create a Request instance.
     *
     * This is mainly useful when you need to override the Request class
     * to keep BC with an existing system. It should not be used for any
     * other purpose.
     *
     * @param callable|null $callable A PHP callable
     */
    public static function setFactory($callable)
    {
        self::$requestFactory = $callable;
    }

    private static function createRequestFromFactory(
        array $query = [],
        array $request = [],
        array $attributes = [],
        array $cookies = [],
        array $files = [],
        array $server = [],
        $content = null)
    {
        if (self::$requestFactory) {
            $request = (self::$requestFactory)($query, $request, $attributes, $cookies, $files, $server, $content);

            if (!$request instanceof self) {
                throw new \LogicException('The Request factory must return an instance of ' . __CLASS__);
            }

            return $request;
        }

        return new static($query, $request, $attributes, $cookies, $files, $server, $content);
    }

    /**
     * Creates a new request with values from PHP's super globals.
     *
     * @return static
     */
    public static function createFromGlobals()
    {
        return self::createRequestFromFactory($_GET, $_POST, [], $_COOKIE, $_FILES, $_SERVER);
    }

    /**
     * Gets the request "intended" method.
     * The method is always an uppercased string.
     *
     * @return string The request method
     *
     */
    public function getMethod()
    {
        $method = strtoupper($this->server->get('REQUEST_METHOD', 'GET'));

        if (\in_array($method,
            ['GET', 'HEAD', 'POST', 'PUT', 'DELETE', 'CONNECT', 'OPTIONS', 'PATCH', 'PURGE', 'TRACE'], true)) {
            return $this->method = $method;
        }

        throw new \InvalidArgumentException(sprintf('Invalid method override "%s".', $method));
    }

    /**
     * Returns the path being requested relative to the executed script.
     *
     * The path info always starts with a /.
     *
     * Suppose this request is instantiated from /mysite on localhost:
     *
     *  * http://localhost/mysite              returns an empty string
     *  * http://localhost/mysite/about        returns '/about'
     *  * http://localhost/mysite/enco%20ded   returns '/enco%20ded'
     *  * http://localhost/mysite/about?var=1  returns '/about'
     *
     * @return string The raw path (i.e. not urldecoded)
     */
    public function getPathInfo()
    {
        if (null === $this->pathInfo) {
            $this->pathInfo = $this->preparePathInfo();
        }

        return $this->pathInfo;
    }

    /**
     * Prepares the path info.
     *
     * @return string path info
     */
    protected function preparePathInfo()
    {
        if (null === ($requestUri = $this->server->get('REQUEST_URI', 'GET'))) {
            return '/';
        }

        // Remove the query string from REQUEST_URI
        if (false !== $pos = strpos($requestUri, '?')) {
            $requestUri = substr($requestUri, 0, $pos);
        }

        return $requestUri;
    }

    /**
     * Get the full URL for the request.
     *
     * @return string
     */
    public function fullUrl()
    {
        $query = $this->server->get('QUERY_STRING');

//        $question = $this->getBaseUrl().$this->getPathInfo() === '/' ? '/?' : '?';

        return $query;
    }

    public function isAjax()
    {
        return 'XMLHttpRequest' == $this->headers->get('X-Requested-With');
    }

    /**
     * Get the session associated with the request.
     *
     * @throws \RuntimeException
     */
    public function session()
    {
        if (!$this->hasSession()) {
            throw new RuntimeException('Session store not set on request.');
        }

        return $this->session;
    }

    public function hasSession()
    {
        return null !== $this->session;
    }

    /**
     * Get the session associated with the request.
     *
     * @return Store|null
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Set the session instance on the request.
     *
     * @param Store $session
     * @return void
     */
    public function setLaravelSession(Store $session)
    {
        $this->session = $session;
    }
}