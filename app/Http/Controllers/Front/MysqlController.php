<?php

namespace app\Http\Controllers\Front;

class MysqlController
{
    private $isEditor = true;

    public function engine()
    {
        return $this->getView('mysql.engine');
    }

    public function indexes()
    {
        return $this->getView('mysql.indexes');
    }

    public function usefulInformation()
    {
        return $this->getView('mysql.useful_information');
    }

    public function relationType()
    {
        return $this->getView('mysql.relation_type');
    }

    public function query()
    {
        return $this->getView('mysql.query');
    }

    public function joins()
    {
        return $this->getView('mysql.joins');
    }

    private function isEdit(): bool
    {
        return role('admin') && $this->isEditor;
    }

    private function getView(string $path)
    {
        return view($path)->with(['isEditor' => $this->isEdit()]);
    }

}