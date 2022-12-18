<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',

        ]);
        Category::create([
            'name' => 'Games',
            'slug' => 'game',

        ]);
        Category::create([
            'name' => 'Design',
            'slug' => 'design',

        ]);
        Category::create([
            'name' => 'System Operation',
            'slug' => 'system-operation',

        ]);
        Category::create([
            'name' => 'Hacking',
            'slug' => 'hack',

        ]);
    }
}