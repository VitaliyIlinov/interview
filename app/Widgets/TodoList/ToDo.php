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
    protected $filePath;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var bool
     */
    protected $isDone;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function render(array $list, string $viewPath, string $actionName)
    {
        return view($viewPath, [
            'list' => $list,
            'action' => $actionName,
        ])->renderView();
    }

    public function getListData(): array
    {
        $filePath = $this->getPathToFile($this->filePath);
        return json_decode(File::get($filePath), true);
    }

    public function putListFile(array $content): bool
    {
        $filePath = $this->getPathToFile($this->filePath);
        return File::put($filePath, json_encode($content, JSON_PRETTY_PRINT));
    }

    public function saveListRow(?int $id = null): array
    {
        $todoList = $this->getListData();

        if ($id === null) {
            $todoList[] = $this->setTodoRow();
        } else {
            $todoList[$id] = array_merge($todoList[$id], $this->setTodoRow());
        }

        $this->putListFile($todoList);
        return end($todoList);
    }

    public function setFilePath(string $filePath): self
    {
        $this->filePath = $filePath;
        return $this;
    }

    public function setIsDone(bool $isDone): self
    {
        $this->isDone = $isDone;
        return $this;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    private function getPathToFile(string $filePath): string
    {
        return $this->app->getBasePath($filePath);
    }

    private function getDate(): string
    {
        return date($this->dateFormat);
    }

    private function setTodoRow()
    {
        return array_filter([
            'is_done' => $this->isDone,
            'description' => $this->description,
            'created_time' => $this->getDate(),
        ], function ($val) {
            return !is_null($val);
        });
    }
}