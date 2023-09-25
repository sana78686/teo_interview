<?php

namespace Database\Seeders;

use Database\Factories\PostFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            PermissionSeeder::class,
            UserSeeder::class,
            PostSeeder::class,
        ]);
        // PostFactory::factory()->count(3)->make();
        
    }
}
