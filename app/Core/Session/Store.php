<?php

namespace app\Core\Session;

use app\helpers\Str;
use SessionHandlerInterface;

class Store
{
    /**
     * The session ID.
     *
     * @var string
     */
    protected $id;

    /**
     * The session name.
     *
     * @var string
     */
    protected $name;

    /**
     * The session attributes.
     *
     * @var array
     */
    protected $attributes = [];

    /**
     * The session handler implementation.
     *
     * @var SessionHandlerInterface
     */
    protected $handler;

    /**
     * Session store started status.
     *
     * @var bool
     */
    protected $started = false;

    /**
     * Create a new session instance.
     *
     * @param string $name
     * @param SessionHandlerInterface $handler
     * @param string|null $id
     * @return void
     */
    public function __construct($name, SessionHandlerInterface $handler, $id = null)
    {
        $this->setId($id);
        $this->name = $name;
        $this->handler = $handler;
    }

    public function start()
    {
        $this->loadSession();

        return $this->started = true;
    }

    /**
     * Load the session data from the handler.
     *
     * @return void
     */
    protected function loadSession()
    {
        $this->attributes = array_merge($this->attributes, $this->readFromHandler());
    }

    /**
     * Read the session data from the handler.
     *
     * @return array
     */
    protected function readFromHandler()
    {
        if ($data = $this->handler->read($this->getId())) {
            $data = @unserialize($this->prepareForUnserialize($data));

            if ($data !== false && !is_null($data) && is_array($data)) {
                return $data;
            }
        }

        return [];
    }

    /**
     * Save the session data to storage.
     *
     */
    public function save()
    {
        $this->handler->write($this->getId(), $this->prepareForStorage(
            serialize($this->attributes)
        ));

        $this->started = false;
    }

    /**
     * Prepare the serialized session data for storage.
     *
     * @param string $data
     * @return string
     */
    protected function prepareForStorage($data)
    {
        return $data;
    }

    /**
     * Prepare the raw string data from the session for unserialization.
     *
     * @param string $data
     * @return string
     */
    protected function prepareForUnserialize($data)
    {
        return $data;
    }

    /**
     * Set the session ID.
     *
     * @param string $id
     * @return void
     */
    public function setId($id)
    {
        $this->id = $this->isValidId($id) ? $id : $this->generateSessionId();
    }

    /**
     * Get a new, random session ID.
     *
     * @return string
     */
    protected function generateSessionId()
    {
        return Str::random(40);
    }

    /**
     * Determine if this is a valid session ID.
     *
     * @param string $id
     * @return bool
     */
    public function isValidId($id)
    {
        return is_string($id) && ctype_alnum($id) && strlen($id) === 40;
    }

    /**
     * Set the "previous" URL in the session.
     *
     * @param string $url
     * @return void
     */
    public function setPreviousUrl(string $url)
    {
        $this->put('_previous.url', $url);
    }

    /**
     * Put a key / value pair or array of key / value pairs in the session.
     *
     * @param string|array $key
     * @param mixed $value
     * @return void
     */
    public function put(string $key, $value = null)
    {
        $this->attributes[$key] = $value;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return SessionHandlerInterface
     */
    public function getHandler(): SessionHandlerInterface
    {
        return $this->handler;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Get an item from the session.
     * @param string $key
     * @param mixed $default
     * @return mixed|null
     */
    public function get(string $key, $default = null)
    {
        return $this->attributes[$key] ?? $default;
    }

    /**
     * Get all of the session data.
     *
     * @return array
     */
    public function all(): array
    {
        return $this->attributes;
    }
}