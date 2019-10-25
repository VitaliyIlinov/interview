<?php

namespace app\helpers\Finder\Iterators;

class DateRangeFilterIterator extends \FilterIterator
{
    private $date;

    public function __construct(\Iterator $iterator, int $date)
    {
        $this->date = $date;

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

        if (!file_exists($fileInfo->getPathname())) {
            return false;
        }

        $fileDate = $fileInfo->getMTime();
        return $fileDate >= $this->date;
    }
}