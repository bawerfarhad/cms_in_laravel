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

4- when we make a component make sure to components have an organized structure using directories,
    to make a component directories included use the command  
    php artisan make:component AdminComponent/DashboardSidebarComponent // this will make a component in the AdminComponent folder
        // we can access the components in the particular views using this way 
        <x-home_component.home-blog-component>
        x- = to let blade know we get access to the component
        home_component = is the directory
        .home-blog-component = is the actual component we want to merge to the page

5-  we can configure the way of targeting the component instead of this: <x-home_component.home-blog-component> , writing like this <x-home-blog-component> = specifying the target component only using the name of name of the component
    for this purpose we have to go to 'app/Providers/AppServiceProvider.php' in the boot function make an alias, look at the "AppServiceProvider.php"
    
    
6- look at "app/Providers/RouteServiceProvider.php" for redirecting user after logged in or register

7- take a look again for components and the way they work 

8- make a post table, create a users foreign key in posts table, make a relationship between posts and users (each post has only one writer, each user has many posts) look at the user and post model for more, make a factory and seed the dummy data to the table and database. 
for all of this make a factory in terminal using command => php artisan make:factory PostFactory <= this will make a fle in the database\factories\PostFactory.php, 
in this file return the factory template, look at the file, after all of this seed the factory data we made, look at the database\seeders\DatabaseSeeder.php for more.

9- upload the image and file to the storage and make a link to the public directory using the command: php artisan storage:

10- if any user log in to the system they can delete any thing in the database, so, to prevent this we need to create a policy
    the command is: php artisan make:policy PostPolicy --model=Post this will create new folder in the app\Policies\PostPolicy.php
    if the folder wes not create, you need to make it in yourself. for this you need to make some configs in app\Providers\AuthServiceProvider.php
    in line 

            protected $policies = [
                // 'App\Models\Model' => 'App\Policies\ModelPolicy',
            ];
    we have to prevent any user to update our posts for this purpose we need to make  policy and in the update function we have to configure the policy 
    look at the policy we made in app\Policies\PostPolicy.php, and in the posts controller we need to call the policy for applying to the all users

    if we want to prevent others to update any other posts we have to configure in the policy, in the update function look at the app\Policies\PostPolicy.php at the 

11- we can prevent any user delete anyone post by adding @can('view', $post) in the foreach of the posts for delete button, this will disable the delete button for unwanted users
    we can also make this happen in the route look at the route
