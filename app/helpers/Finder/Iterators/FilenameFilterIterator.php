<?php

namespace app\helpers\Finder\Iterators;

class FilenameFilterIterator extends \FilterIterator
{
    private $matchRegexps = [];

    /**
     * @param \Iterator $iterator The Iterator to filter
     * @param array $matchPatterns An array of patterns that need to match
     */
    public function __construct(\Iterator $iterator, array $matchPatterns)
    {
        $this->matchRegexps = $matchPatterns;

        parent::__construct($iterator);
    }

    public function accept()
    {
        $fileName = $this->current()->getFilename();
        foreach ($this->matchRegexps as $regex) {
            if (preg_match($regex, $fileName)) {
                return false;
            }
        }
        return true;
    }
}