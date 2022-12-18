<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Admin',
            'username' => 'admin88',
            'email' => 'admin@material.com',
            'password' => ('secret')
        ]);

        User::factory(5)->create();
        Post::factory(20)->create();
        $this->call([
            CategorySeeder::class
        ]);
    }
}