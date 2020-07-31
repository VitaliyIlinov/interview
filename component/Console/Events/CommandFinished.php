<?php

namespace component\Console\Events;

use component\Console\Input\InputInterface;
use component\Console\Output\OutputInterface;

class CommandFinished
{
    /**
     * The command name.
     *
     * @var string
     */
    public $command;

    /**
     * The console input implementation.
     *
     * @var InputInterface|null
     */
    public $input;

    /**
     * The command output implementation.
     *
     * @var OutputInterface|null
     */
    public $output;

    /**
     * The command exit code.
     *
     * @var int
     */
    public $exitCode;


    /**
     * Create a new event instance.
     *
     * @param  string  $command
     * @param  InputInterface  $input
     * @param  OutputInterface  $output
     * @return void
     */
    public function __construct($command, InputInterface $input, OutputInterface $output,$exitCode)
    {
        $this->input = $input;
        $this->output = $output;
        $this->command = $command;
    }
}