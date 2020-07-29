<?php

namespace app\Exceptions;

class WrapHtmlException
{
    private $message;

    private $code;

    private $previous;

    private $trace;

    private $traceAsString;

    private $class;

    private $statusCode;

    private $file;

    private $line;

    public static function create(\Exception $exception)
    {
        return static::createFromThrowable($exception);
    }

    public static function createFromThrowable(\Throwable $exception, $statusCode = 500): self
    {
        $e = new static();
        $e->setMessage($exception->getMessage());
        $e->setCode($exception->getCode());
        $e->setStatusCode($statusCode);
        $e->setTraceFromThrowable($exception);
        $e->setClass($exception instanceof FatalThrowableError ? $exception->getOriginalClassName() : \get_class($exception));
        $e->setFile($exception->getFile());
        $e->setLine($exception->getLine());
        $previous = $exception->getPrevious();

        if ($previous instanceof \Throwable) {
            $e->setPrevious(static::createFromThrowable($previous));
        }
        return $e;
    }

    public function getAllPrevious()
    {
        $exceptions = [];
        $e = $this;
        while ($e = $e->getPrevious()) {
            $exceptions[] = $e;
        }

        return $exceptions;
    }

    public function toArray()
    {
        $exceptions = [];
        foreach (array_merge([$this], $this->getAllPrevious()) as $exception) {
            $exceptions[] = [
                'message' => $exception->getMessage(),
                'class'   => $exception->getClass(),
                'trace'   => $exception->getTrace(),
            ];
        }

        return $exceptions;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message): void
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code): void
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getPrevious()
    {
        return $this->previous;
    }

    /**
     * @param mixed $previous
     */
    public function setPrevious($previous): void
    {
        $this->previous = $previous;
    }

    /**
     * @return mixed
     */
    public function getTrace()
    {
        return $this->trace;
    }

    /**
     * @return mixed
     */
    public function getTraceAsString()
    {
        return $this->traceAsString;
    }

    public function setTraceFromThrowable(\Throwable $throwable)
    {
        $this->traceAsString = $throwable->getTraceAsString();

        return $this->setTrace($throwable->getTrace(), $throwable->getFile(), $throwable->getLine());
    }

    /**
     * @return $this
     */
    public function setTrace($trace, $file, $line)
    {
        $this->trace = [];
        $this->trace[] = [
            'namespace'   => '',
            'short_class' => '',
            'class'       => '',
            'type'        => '',
            'function'    => '',
            'file'        => $file,
            'line'        => $line,
            'args'        => [],
        ];
        foreach ($trace as $entry) {
            $class = '';
            $namespace = '';
            if (isset($entry['class'])) {
                $parts = explode('\\', $entry['class']);
                $class = array_pop($parts);
                $namespace = implode('\\', $parts);
            }

            $this->trace[] = [
                'namespace'   => $namespace,
                'short_class' => $class,
                'class'       => $entry['class'] ?? '',
                'type'        => $entry['type'] ?? '',
                'function'    => $entry['function'] ?? null,
                'file'        => $entry['file'] ?? null,
                'line'        => $entry['line'] ?? null,
                'args'        => $entry['args'] ? json_encode($entry['args']) : null
            ];
        }

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param mixed $class
     */
    public function setClass($class): void
    {
        $this->class = $class;
    }

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param mixed $statusCode
     */
    public function setStatusCode($statusCode): void
    {
        $this->statusCode = $statusCode;
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     */
    public function setFile($file): void
    {
        $this->file = $file;
    }

    /**
     * @return mixed
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * @param mixed $line
     */
    public function setLine($line): void
    {
        $this->line = $line;
    }
}
