<?php

namespace app\Http\Controllers\Front;

use app\Core\Request;
use app\support\Facades\File;

class AjaxController
{
    public function readContent(Request $request)
    {
        return response()->json(File::get($request->query->get('path')));
    }

    public function saveContent(Request $request)
    {
        return File::put(
            $request->request->get('path'),
            $request->request->get('content')
        );
    }
}