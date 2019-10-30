<?php

namespace app\Providers;

use app\Core\Support\ServiceProvider;
use app\Http\View\Composers\AdminView;
use app\Http\View\Composers\Catalog;
use app\support\Facades\ViewFacade;

class ViewProvider extends ServiceProvider
{
    public function boot()
    {
        //todo admin && front
//        ViewFacade::creator(
//            '*', AdminView::class
//        );
        ViewFacade::composer(
            '*', Catalog::class
        );

//        // Using Closure based composers...
//        ViewFacade::composer('*', function (View $view) {
//            $view->with('yes',__METHOD__);
//        });

        // Using class based composers...
        ViewFacade::composer(
            'docker.main', 'app\Http\View\Composers\Catalog'
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