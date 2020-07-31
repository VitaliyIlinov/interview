<?php

namespace component\Contracts\Console;

use component\Console\Input\InputInterface;
use component\Console\Output\OutputInterface;

interface Kernel
{
    /**
     * Handle an incoming console command.
     *
     * @param  InputInterface  $input
     * @param  OutputInterface|null  $output
     * @return int
     */
    public function handle(InputInterface $input, OutputInterface $output = null);

}