<?php

namespace app\Core\Response;

use app\contracts\Support\Renderable;
use ArrayObject;
use JsonSerializable;

class Response extends BaseResponse
{
    public function setContent($content)
    {
        // If the content is "JSONable" we will set the appropriate header and convert
        // the content to JSON. This is useful when returning something like models
        // from routes that will be automatically transformed to their JSON form.
        if ($this->shouldBeJson($content)) {
            $this->header('Content-Type', 'application/json');

            $content = $this->morphToJson($content);
        }

        // If this content implements the "Renderable" interface then we will call the
        // render method on the object so we will avoid any "__toString" exceptions
        // that might be thrown and have their errors obscured by PHP's handling.
        elseif ($content instanceof Renderable) {
            $content = $content->render();
        }

        return parent::setContent($content);
    }

    /**
     * Determine if the given content should be turned into JSON.
     *
     * @param mixed $content
     *
     * @return bool
     */
    protected function shouldBeJson($content): bool
    {
        return $content instanceof ArrayObject ||
            $content instanceof JsonSerializable ||
            is_array($content);
    }

    /**
     * Morph the given content into JSON.
     *
     * @param mixed $content
     *
     * @return string
     */
    protected function morphToJson($content)
    {
        return json_encode($content);
    }
}