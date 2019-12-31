<?php

namespace app\Http\Controllers\Front;

use app\Core\Request;
use app\Widgets\Editor\Editor;

class AjaxController
{
    public function readContent(Request $request, Editor $editor)
    {
        return response()->json(
            $editor->readContent($request->query->get('path'))
        );
    }

    public function saveContent(Request $request, Editor $editor)
    {
        return $editor->saveContent(
            $request->request->get('path'),
            $request->request->get('content')
        );
    }
}