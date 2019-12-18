<?php

namespace app\contracts\Support;

use app\Core\Request;
use app\Core\Response\Response;

interface Responsable
{
    public function toResponse(Request $request): Response;
}