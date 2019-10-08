<?php

namespace app\Http\View\Composers;

use app\Core\View\View;

class ExampleComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('count', 'dsfsdf');
    }

}