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
use App\View\Components\AdminComponent\EditComponent; // admin dashboard component
use App\View\Components\AdminComponent\Footer; // admin dashboard component
use App\View\Components\AdminComponent\UserSettings\ProfileComponent; // admin dashboard component


use Illuminate\Pagination\Paginator; // this line allow us to work with pagination css design



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

        paginator::useBootstrap();  // this line tells the pagination design should be in bootstrap


        // Home Blog Section Start
        Blade::component('blog',HomeBlogComponent::class);
        Blade::component('navbar',HomeNavbarComponent::class);
        Blade::component('sidebar',HomeSidebarWedgetsComponent::class);
        // Home Blog Section End

        // Admin Dashboard Section Start
        Blade::component('admin-sidebar',SidebarComponent::class);
        Blade::component('admin-toolbar',ToolbarComponent::class);
        Blade::component('admin-create-post',CreatePostComponent::class);
        Blade::component('admin-show-all-posts',ShowAllPosts::class);
        Blade::component('admin-edit-post',EditComponent::class);
        Blade::component('admin-footer',Footer::class);

        // Admin Dashboard Section End

        // Users Section Start

        Blade::component('user-profile',ProfileComponent::class);
        // Users Section End



//        making an alias for the components
    }
}
