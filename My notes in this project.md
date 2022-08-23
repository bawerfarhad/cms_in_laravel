# A big note this project is based on the cms_project in the Udemy Course

1- first aff all i need to install auth with bootstrap using the: 
    composer require laravel/ui
    php artisan ui bootstrap --auth
    
    >> after that create database, set the database name in the .env file and migrate to the database 
    php artisan migrate
2- after that make changes in the login, the default dashboard site become the first place the user see after login
    delete the default welcome.blade.php file in view directory, go to the routes and delete the '/' route.
    change the '/home' route to '/' to become the master page of the main page.
    disable the middleware in home constructor, look at: app/Http/Controllers/HomeController.php
    
    
    
    
3- i use components for making the large and complex ui into the small peaces
    every initial components are in the app.blade.php ==> the components are 
    [
        '<x-home-navbar-component />', // all navbar settings are located in this component
        '<x-home-blog-component />',   // all blobs in this component
        '<x-home-sidebar-wedgets-component />', // all sidebar widgets are in this component like search categories and more
    ]    
