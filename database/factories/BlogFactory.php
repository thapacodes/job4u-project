<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category = ['day in a life', 'hiring', 'job hunting', 'working', 'job4u news', 'events', 'reports', 'resources', 'others', 'design', 'development', 'tutorial', 'guide'];

        return [
            'thumbnail' => env('APP_URL').'/uploads/pictures/blog/sample-'.rand(1, 6).'.jpg',
            'title' => $this->faker->sentence(),
            'slug' => preg_replace('/\s+/', '-', $this->faker->sentence()),
            'category' => $category[rand(0, 12)],
            'description' => $this->faker->paragraph(30),
        ];
    }
}
