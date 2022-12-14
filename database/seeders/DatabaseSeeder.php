<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use \App\Models\User;
use \App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // User::truncate();
        // Category::truncate();
        // Post::truncate();

         $user = User::factory()->create([
            'username' => 'John Doe'
         ]);


         Post::factory(5)->create([
            'user_id' => $user->id
         ]);

         

        // $user = User::factory()->create();

        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);
        // Category::create([
        //     'name' => 'Hobby',
        //     'slug' => 'hobby'
        // ]);
        // Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);
        // Category::create([
        //     'name' => 'Photography',
        //     'slug' => 'photography'
        //]);
    }
}
