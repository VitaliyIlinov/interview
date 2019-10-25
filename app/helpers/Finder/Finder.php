<?php

namespace app\helpers\Finder;

use app\helpers\Finder\Iterators\DateRangeFilterIterator;
use app\helpers\Finder\Iterators\FilenameFilterIterator;
use app\helpers\Finder\Iterators\FileTypeIterator;
use RecursiveDirectoryIterator;

class Finder implements \IteratorAggregate
{
    private $names = [];

    private $mode = 0;

    private $dirs = [];

    private $dates = 0;

    /**
     * Restricts the matching to directories only.
     *
     */
    public function directories()
    {
        $this->mode = FileTypeIterator::ONLY_DIRECTORIES;

        return $this;
    }

    /**
     * Restricts the matching to files only.
     *
     * @return $this
     */
    public function files()
    {
        $this->mode = FileTypeIterator::ONLY_FILES;

        return $this;
    }

    public function date(int $timeStamp)
    {
        $this->dates = $timeStamp;

        return $this;
    }

    /**
     * Adds rules that files must match.
     *
     * You can use patterns (delimited with / sign), globs or simple strings.
     *
     *     $finder->name('*.php')
     *     $finder->name('/\.php$/') // same as above
     *     $finder->name('test.php')
     *     $finder->name(['test.py', 'test.php'])
     *
     * @param string|string[] $patterns A pattern (a regexp, a glob, or a string) or an array of patterns
     * @return $this
     */
    public function name($patterns)
    {
        $this->names = \array_merge($this->names, (array)$patterns);

        return $this;
    }

        /**
     * Creates a new Finder.
     */
    public static function create(): self
    {
        return new static();
    }

    public function in($dirs)
    {
        $resolvedDirs = [];

        foreach ((array)$dirs as $dir) {
            if (is_dir($dir)) {
                $resolvedDirs[] = $dir;
            } elseif ($glob = glob($dir, GLOB_BRACE | GLOB_ONLYDIR)) {
                $resolvedDirs = array_merge($resolvedDirs, $glob);
            } else {
                throw new \InvalidArgumentException(sprintf('The "%s" directory does not exist.', $dir));
            }
        }
        $this->dirs = array_merge($this->dirs, $resolvedDirs);

        return $this;
    }

    public function getIterator()
    {
        if (0 === \count($this->dirs)) {
            throw new \LogicException('You must call one of in() before iterating over a Finder.');
        }

        if (1 === \count($this->dirs)) {
            return $this->searchInDirectory($this->dirs[0]);
        }

        $iterator = new \AppendIterator();
        foreach ($this->dirs as $dir) {
            $iterator->append($this->searchInDirectory($dir));
        }

        return $iterator;
    }

    private function searchInDirectory(string $dir): \Iterator
    {

        $iterator = new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS);

        $iterator = new \RecursiveIteratorIterator($iterator, \RecursiveIteratorIterator::SELF_FIRST);

        if ($this->mode) {
            $iterator = new FileTypeIterator($iterator, $this->mode);
        }

        if ($this->names) {
            $iterator = new FilenameFilterIterator($iterator, $this->names);
        }

        if ($this->dates) {
            $iterator = new DateRangeFilterIterator($iterator, $this->dates);
        }

        return $iterator;
    }
}
