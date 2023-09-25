<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Specify the number of posts you want to create
        $numberOfPosts = 3;
        $faker = Faker::create();

        for ($i = 1; $i <= $numberOfPosts; $i++) {
            // Generate random paragraph content for each post
            $content = $faker->paragraphs(rand(1, 3), true);

            // Randomly select a user ID from the users table
            $user_id = DB::table('users')->inRandomOrder()->first()->id;

            // Insert the post data into the posts table
            DB::table('posts')->insert([
                'content' => $content,
                'user_id' => $user_id,
            ]);
        }
    }
}
