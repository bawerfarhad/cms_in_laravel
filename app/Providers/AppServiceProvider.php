<?php

namespace App\Providers;

use App\View\Components\Home_Component\HomeNavbarComponent;
use App\View\Components\Home_Component\HomeSidebarWedgetsComponent;
use Illuminate\Support\Facades\Blade; // we need this class to work with components
use App\View\Components\Home_Component\HomeBlogComponent; // the component we need for make an alias
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Blade::component('blog',HomeBlogComponent::class);
        Blade::component('navbar',HomeNavbarComponent::class);
        Blade::component('sidebar',HomeSidebarWedgetsComponent::class);
//        making an alias for the components
    }
}
