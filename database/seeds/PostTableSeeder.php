<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Post::truncate();

        $faker = \Faker\Factory::create();

        for($count = 0; $count <12; $count++) {
            Post::create([
                'title' => $faker->sentence,
                'slug' => $faker->sentence,
                'body' => $faker->paragraph
            ]);
        }
    }
}
