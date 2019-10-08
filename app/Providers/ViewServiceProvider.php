<?php

namespace app\Providers;

use app\Core\View\View;
use app\support\Facades\ViewFacade;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
//        // Using Closure based composers...
//        ViewFacade::composer('*', function (View $view) {
//            $view->with('yes',__METHOD__);
//        });

        // Using class based composers...
        ViewFacade::composer(
            'docker.main', 'app\Http\View\Composers\ExampleComposer'
        );

        ViewFacade::composer(
            ['profile', 'dashboard'],
            'App\Http\View\Composers\MyViewComposer'
        );
    }

    public function register()
    {

    }
}