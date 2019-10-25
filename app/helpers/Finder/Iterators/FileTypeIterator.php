<?php

namespace app\helpers\Finder\Iterators;

use Iterator;

class FileTypeIterator extends \FilterIterator
{
    const ONLY_FILES = 1;
    const ONLY_DIRECTORIES = 2;

    private $mode;

    public function __construct(Iterator $iterator, int $mode)
    {
        $this->mode = $mode;
        parent::__construct($iterator);
    }

    /**
     * Filters the iterator values.
     *
     * @return bool true if the value should be kept, false otherwise
     */
    public function accept()
    {
        $fileInfo = $this->current();
        if ($this->mode === self::ONLY_FILES && $fileInfo->isFile()) {
            return true;
        } elseif ($this->mode === self::ONLY_DIRECTORIES && $fileInfo->isDir()) {
            return true;
        }
        return false;
    }
}