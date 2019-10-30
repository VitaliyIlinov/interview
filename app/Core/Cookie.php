<?php

namespace app\Core;

class Cookie
{
    private $name;
    private $value;
    private $expire;

    /**
     * Cookie constructor.
     * @param string $name
     * @param string $value
     * @param int $expire
     */
    public function __construct(string $name, string $value, int $expire)
    {
        $this->name = $name;
        $this->value = $value;
        $this->expire = $expire;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @return int
     */
    public function getExpiresTime(): int
    {
        return $this->expire;
    }

    /**
     * Gets the max-age attribute.
     *
     * @return int
     */
    public function getMaxAge()
    {
        $maxAge = $this->expire - time();

        return 0 >= $maxAge ? 0 : $maxAge;
    }

    public function setRaw():string
    {
        $str = $this->getName() ."=" . $this->getValue();
        if (0 !== $this->getExpiresTime()) {
            $str .= '; expires='.gmdate('D, d-M-Y H:i:s T', $this->getExpiresTime()).'; Max-Age='.$this->getMaxAge();
        }

        if ($this->getPath()) {
            $str .= '; path='.$this->getPath();
        }

        return $str;
    }

    public function getPath()
    {
        return '/';
    }
}