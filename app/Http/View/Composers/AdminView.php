<?php

namespace app\Http\View\Composers;

use app\Core\Application;
use app\Core\View\View;

class AdminView
{
    /**
     * @var Application
     */
    private $app;

    /**
     * AdminView constructor.
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function create(View $view)
    {
        $action = $this->app->getCurrentRoute()[1];
        if($action['prefix']==='admin_panel'){

        }

    }
}