<?php

namespace app\Providers;

use app\Core\Support\ServiceProvider;
use app\Http\View\Composers\AdminCatalog;
use app\Http\View\Composers\FrontCatalog;
use app\support\Facades\ViewFacade;

class ViewProvider extends ServiceProvider
{
    public function boot()
    {
        ViewFacade::composer(
            'admin.*', AdminCatalog::class
        );
        ViewFacade::composer(
            'front.*', FrontCatalog::class
        );

//        // Using Closure based composers...
//        ViewFacade::composer('*', function (View $view) {
//            $view->with('yes',__METHOD__);
//        });

        ViewFacade::composer(
            ['profile', 'dashboard'],
            'App\Http\View\Composers\MyViewComposer'
        );
    }

    public function register()
    {

    }
}