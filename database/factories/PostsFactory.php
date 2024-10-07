<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostsFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'tile' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'content' => $this->faker->text,
        ];
    }
}