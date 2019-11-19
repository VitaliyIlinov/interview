<?php

namespace app\Http\Controllers\Admin\Traits;

use app\support\Facades\File;

trait TodoList
{
    protected $dateDormat = 'Y-m-d H:i:s';

    protected $todoPath='Models/Admin/helpers/todo.json';

    protected function getTodoListData(): array
    {
        return json_decode(File::get($this->getPathToFile()), true);
    }

    protected function putTodoListFile(array $content, ?string $filePath = null): bool
    {
        return File::put($this->getPathToFile() ?: $filePath, json_encode($content));
    }

    protected function getPathToFile(): string
    {
        return app()->getBasePath($this->todoPath);
    }

    protected function getDate(): string
    {
        return date($this->dateDormat);
    }

    protected function setTodoRow(?string $description = null, bool $isDone = false)
    {
        return [
            'is_done'      => $isDone,
            'description'  => $description,
            'created_time' => $this->getDate(),
        ];
    }
}
