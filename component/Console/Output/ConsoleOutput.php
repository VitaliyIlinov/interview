<?php

namespace component\Console\Output;

class ConsoleOutput extends Output
{
    /**
     * @var resource
     */
    private $stream;

    public function __construct()
    {
        $this->openOutputStream();
    }

    /**
     * @return resource
     */
    private function openOutputStream()
    {
        return $this->stream = fopen('php://output', 'w');
    }

    /**
     * {@inheritdoc}
     */
    public function writeln($message, bool $newline = true)
    {
        if ($newline) {
            $message .= PHP_EOL;
        }

        if (false === @fwrite($this->stream, $message)) {
            // should never happen
            throw new RuntimeException('Unable to write output.');
        }

        fflush($this->stream);
    }

}