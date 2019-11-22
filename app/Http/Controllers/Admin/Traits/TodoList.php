<?php

namespace app\Http\Controllers\Admin\Traits;

use app\support\Facades\File;

trait TodoList
{
    protected $dateDormat = 'Y-m-d H:i:s';

    protected $todoPath = 'Models/Admin/helpers/todo.json';

    /**
     * @var string
     */
    protected $description;

    /**
     * @var bool
     */
    protected $is_done;

    /**
     * @param string $description
     *
     * @return TodoList
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param bool $is_done
     *
     * @return TodoList
     */
    public function setIsDone(bool $is_done): self
    {
        $this->is_done = $is_done;
        return $this;
    }

    protected function getTodoListData(?string $filePath = null): array
    {
        $filePath = $this->getPathToFile($filePath ?: $this->todoPath);
        return json_decode(File::get($filePath), true);
    }

    protected function putTodoListFile(array $content, ?string $filePath = null): bool
    {
        $filePath = $this->getPathToFile($filePath ?: $this->todoPath);
        return File::put($filePath, json_encode($content, JSON_PRETTY_PRINT));
    }

    protected function getPathToFile(string $filePath): string
    {
        return app()->getBasePath($filePath);
    }

    protected function getDate(): string
    {
        return date($this->dateDormat);
    }

    protected function setTodoRow()
    {
        return array_filter([
            'is_done'      => $this->is_done,
            'description'  => $this->description,
            'created_time' => $this->getDate(),
        ], function ($val) {
            return !is_null($val);
        });
    }

    /**
     * @param int $id
     *
     * @return array
     */
    protected function saveTodoListRow(?int $id = null): array
    {
        $todoList = $this->getTodoListData();

        if ($id === null) {
            $todoList[] = $this->setTodoRow();
        } else {
            $todoList[$id] = array_merge($todoList[$id], $this->setTodoRow());
        }

        $this->putTodoListFile($todoList);
        return $todoList;
    }

    /**
     * @param string $todoPath
     */
    public function setTodoPath(string $todoPath): void
    {
        $this->todoPath = $todoPath;
    }
}
