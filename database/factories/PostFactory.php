<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User; // import uer model 
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'=> $this->factoryForModel(User::class), // to access the users table we need to import user model
            'title'=>$this->faker->sentence(),
            'post_image'=>$this->faker->imageUrl(300,200),
            'body'=> $this->faker->paragraph()
        ];
    }
}
