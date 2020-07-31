<?php

namespace component\Console;

use app\Core\Application as MainApp;
use component\Console\Input\InputInterface;
use component\Console\Output\OutputInterface;

abstract class Command
{
    /**
     * @var MainApp
     */
    protected $app;

    /**
     * @var string
     */
    private $name;

    /**
     * Set the Laravel application instance.
     *
     * @param MainApp $app
     * @return void
     */
    public function setApp($app)
    {
        $this->app = $app;
    }

    /**
     * Returns the command name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    public function run(InputInterface $input, OutputInterface $output)
    {
        $this->initialize($input, $output);
    }

    protected function initialize(InputInterface $input, OutputInterface $output)
    {

    }

    abstract function execute();
}