<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();
        \App\Models\Job::factory(100)->create();
        \App\Models\Blog::factory(100)->create();
        \App\Models\Contact::factory(100)->create();
        \App\Models\Company::factory(100)->create();
        \App\Models\LearningPortal::factory(100)->create();
        \App\Models\FAQ::factory(100)->create();
        \App\Models\Notification::factory(10)->create();
    }
}
