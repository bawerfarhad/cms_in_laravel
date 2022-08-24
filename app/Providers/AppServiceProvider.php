<?php

namespace App\Providers;

use App\View\Components\Admin_Component\NavbarComponent;
use App\View\Components\Home_Component\HomeNavbarComponent; // blog components we need
use App\View\Components\Home_Component\HomeSidebarWedgetsComponent; // blog components we need
use Illuminate\Support\Facades\Blade; // this class must be imported to work with components
use App\View\Components\Home_Component\HomeBlogComponent; // blog components we need
use Illuminate\Support\ServiceProvider;

//use App\View\Components\AdminComponent\NavbarComponent; // admin dashboard component
use App\View\Components\AdminComponent\SidebarComponent; // admin dashboard component
use App\View\Components\AdminComponent\ToolbarComponent; // admin dashboard component
use App\View\Components\AdminComponent\CreatePostComponent; // admin dashboard component
use App\View\Components\AdminComponent\ShowAllPosts; // admin dashboard component





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
        // Home Blog Section Start
        Blade::component('blog',HomeBlogComponent::class);
        Blade::component('navbar',HomeNavbarComponent::class);
        Blade::component('sidebar',HomeSidebarWedgetsComponent::class);
        // Home Blog Section End

        // Admin Dashboard Section Start
        Blade::component('admin-sidebar',SidebarComponent::class);
        Blade::component('admin-toolbar',ToolbarComponent::class);
        Blade::component('admin-create-post',CreatePostComponent::class);
        Blade::component('show-all-posts',ShowAllPosts::class);

        // Admin Dashboard Section End



//        making an alias for the components
    }
}
