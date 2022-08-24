<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Carbon\Factory;
use Illuminate\Database\Seeder;
// use App\Models\Post;
// use App\Models\User;
use database\factories\PostFactory;
use database\factories\UserFactory;
// use Illuminate\Database\Eloquent\Factories\Factory;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {



        // \App\Models\User::factory(10)->create(); // working, makes 10 users
        // \App\Models\Post::factory(200)->create(); // working





        // factory(User::class,200)->create->each(
        //     function($user){
        //         $user->posts()->save(Factory(Post::class)->make());
        //     }
        // ); // not


    }
}
