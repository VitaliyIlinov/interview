<?php

namespace component\Console\Input;

class ArgvInput extends Input
{
    private $argv;

    /**
     * ArgvInput constructor.
     *
     * @param $argv
     */
    public function __construct(array $argv = null)
    {
        if (null === $argv) {
            $argv = $_SERVER['argv'];
        }

        // strip the application name
        array_shift($argv);

        $this->argv = $argv;
    }

    public function getFirstArgument()
    {
        return $this->argv[0];
    }
}