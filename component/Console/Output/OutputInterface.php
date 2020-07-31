<?php

namespace component\Console\Output;

interface OutputInterface
{
    /**
     * Writes a message to the output and adds a newline at the end.
     *
     * @param string $message The message is strings or a single string
     * @param bool    $newLine
     */
    public function writeln($message, bool $newLine = true);

}
