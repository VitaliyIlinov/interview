<?php

namespace app\Providers;

use app\Core\Support\ServiceProvider;
use app\support\Facades\ViewFacade;

class ViewProvider extends ServiceProvider
{
    public function boot()
    {
        ViewFacade::share(
            'catalog', 'sdfsdfsd'
        );
        ViewFacade::composer(
            '*', 'app\Http\View\Composers\Catalog'
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