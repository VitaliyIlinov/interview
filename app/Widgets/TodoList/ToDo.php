<?php

namespace app\Widgets\TodoList;

use app\Core\Application;
use app\support\Facades\File;

class ToDo
{
    /**
     * @var Application
     */
    private $app;

    /**
     * @var string
     */
    private $dateFormat = 'Y-m-d H:i:s';

    /**
     * @var string
     */
    protected $todoPath;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var bool
     */
    protected $is_done;


    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function render()
    {
        var_dump(__METHOD__);
        return 6666;
    }

    private function getPathToFile(string $filePath): string
    {
        return $this->app->getBasePath($filePath);
    }

    private function getDate(): string
    {
        return date($this->dateDormat);
    }

    public function setTodoPath(string $todoPath): self
    {
        $this->todoPath = $todoPath;
        return $this;
    }

    public function setIsDone(bool $is_done): self
    {
        $this->is_done = $is_done;
        return $this;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

}