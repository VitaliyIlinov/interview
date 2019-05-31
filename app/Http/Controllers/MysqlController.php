<?php

namespace app\Http\Controllers;

class MysqlController
{
    public function engine()
    {
        return view('mysql.engine');
    }

    public function indexes()
    {
        return view('mysql.indexes');
    }

    public function usefulInformation()
    {
        return view('mysql.useful_information');
    }

    public function relationType()
    {
        return view('mysql.relation_type');
    }

    public function query()
    {
        return view('mysql.query');
    }

    public function joins()
    {
        return view('mysql.joins');
    }
}