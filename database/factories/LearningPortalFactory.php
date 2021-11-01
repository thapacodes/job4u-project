<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class LearningPortalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category = [
            'design', 
            'full-stack-programming',
            'front-end-programming', 
            'back-end-programming', 
            'game-dev', 
            'app-dev', 
            'customer-support', 
            'devops-sysadmin', 
            'sales-and-marketing', 
            'management-and-finance', 
            'product', 
            'others'
        ];

        $url = [
            'https://www.freecodecamp.org/',
            'https://www.khanacademy.org/',
            'https://www.theodinproject.com/',
            'https://www.coursera.org/',
            'https://www.edx.org/'
        ];

        return [
            'thumbnail' => env('APP_URL').'/uploads/pictures/blog/sample-'.rand(1, 10).'.jpg',
            'title' => $this->faker->sentence(),
            'category' => $category[rand(0, 11)],
            'url' => $url[rand(0, 4)],
            'status' => 'checked',
        ];
    }
}
