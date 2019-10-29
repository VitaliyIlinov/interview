<?php

namespace app\Core\Session;

use app\helpers\Filesystem;
use app\helpers\Finder\Finder;
use SessionHandlerInterface;

class FileSessionHandler implements SessionHandlerInterface
{
    /**
     * The filesystem instance.
     *
     * @var Filesystem
     */
    protected $files;

    /**
     * The path where sessions should be stored.
     *
     * @var string
     */
    protected $path;

    /**
     * The number of minutes the session should be valid.
     *
     * @var int
     */
    protected $minutes;

    public function __construct(Filesystem $files, $path, $minutes)
    {
        $this->path = $path;
        $this->files = $files;
        $this->minutes = $minutes;
    }

    /**
     * @inheritDoc
     */
    public function close()
    {
        // TODO: Implement close() method.
    }

    /**
     * @inheritDoc
     */
    public function destroy($sessionId)
    {
        // TODO: Implement destroy() method.
    }

    /**
     * @inheritDoc
     */
    public function gc($lifetime)
    {
        $files = Finder::create()
            ->in($this->path)
            ->files()
            ->date(time() - $lifetime);

        /**
         * @var $file \SplFileInfo
         */
        foreach ($files as $file) {
            $this->files->delete($file->getRealPath());
        }
    }

    /**
     * @inheritDoc
     */
    public function open($save_path, $name)
    {
        // TODO: Implement open() method.
    }

    /**
     * @inheritDoc
     */
    public function read($sessionId)
    {
        if ($this->files->isFile($path = $this->path . '/' . $sessionId)) {
            if ($this->files->lastModified($path) >= time() - ($this->minutes*60)) {
                return $this->files->sharedGet($path);
            }
        }

        return '';
    }

    /**
     * @inheritDoc
     */
    public function write($sessionId, $sessionData)
    {
        $this->files->put($this->path.'/'.$sessionId, $sessionData, true);

        return true;
    }
}