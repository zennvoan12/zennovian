<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => 'Javascript',
            'slug' => 'javascript',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat minus nobis facilis rerum itaque corrupti libero, corporis nulla distinctio harum ratione tempora quisquam aperiam optio reprehenderit, illo totam adipisci in.
            ',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur vero amet maxime, repellendus veritatis non error cupiditate quod officiis. Magnam maiores nisi dolores rem, error quis dolore ex quae culpa? Provident hic recusandae doloribus autem rerum incidunt quisquam officia quas similique a deserunt, fugit magni nihil cumque necessitatibus porro soluta fugiat officiis corrupti debitis. Dolore omnis fugiat, dolor minima voluptatem tenetur, ducimus, perspiciatis odio dolores dignissimos earum eos facere. Ullam accusamus ut est reiciendis excepturi error fugiat fuga. Dolore inventore reprehenderit necessitatibus a, earum mollitia eaque provident debitis placeat temporibus officia, possimus consequatur dolores blanditiis iure, aliquam totam sunt ducimus et molestias. Sequi quae nisi dolor dolorem explicabo. Ad laboriosam vero sit sunt, maxime nisi voluptas beatae quisquam minus enim.
            ',
            'category_id' => 1,
            'user_id' => 1

        ]);
        Post::create([
            'title' => 'Assassin Creed',
            'slug' => 'assassin-creed',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat minus nobis facilis rerum itaque corrupti libero, corporis nulla distinctio harum ratione tempora quisquam aperiam optio reprehenderit, illo totam adipisci in.
            ',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur vero amet maxime, repellendus veritatis non error cupiditate quod officiis. Magnam maiores nisi dolores rem, error quis dolore ex quae culpa? Provident hic recusandae doloribus autem rerum incidunt quisquam officia quas similique a deserunt, fugit magni nihil cumque necessitatibus porro soluta fugiat officiis corrupti debitis. Dolore omnis fugiat, dolor minima voluptatem tenetur, ducimus, perspiciatis odio dolores dignissimos earum eos facere. Ullam accusamus ut est reiciendis excepturi error fugiat fuga. Dolore inventore reprehenderit necessitatibus a, earum mollitia eaque provident debitis placeat temporibus officia, possimus consequatur dolores blanditiis iure, aliquam totam sunt ducimus et molestias. Sequi quae nisi dolor dolorem explicabo. Ad laboriosam vero sit sunt, maxime nisi voluptas beatae quisquam minus enim.
            ',
            'category_id' => 2,
            'user_id' => 2

        ]);
        // Post::create([
        //     'title' => 'Pyhton',
        //     'slug' => 'python',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat minus nobis facilis rerum itaque corrupti libero, corporis nulla distinctio harum ratione tempora quisquam aperiam optio reprehenderit, illo totam adipisci in.
        //     ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur vero amet maxime, repellendus veritatis non error cupiditate quod officiis. Magnam maiores nisi dolores rem, error quis dolore ex quae culpa? Provident hic recusandae doloribus autem rerum incidunt quisquam officia quas similique a deserunt, fugit magni nihil cumque necessitatibus porro soluta fugiat officiis corrupti debitis. Dolore omnis fugiat, dolor minima voluptatem tenetur, ducimus, perspiciatis odio dolores dignissimos earum eos facere. Ullam accusamus ut est reiciendis excepturi error fugiat fuga. Dolore inventore reprehenderit necessitatibus a, earum mollitia eaque provident debitis placeat temporibus officia, possimus consequatur dolores blanditiis iure, aliquam totam sunt ducimus et molestias. Sequi quae nisi dolor dolorem explicabo. Ad laboriosam vero sit sunt, maxime nisi voluptas beatae quisquam minus enim.
        //     ',
        //     'category_id' => 1,
        //     'user_id' => 4

        // ]);
        Post::create([
            'title' => 'Photoshop Learning',
            'slug' => 'photoshop-learning',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat minus nobis facilis rerum itaque corrupti libero, corporis nulla distinctio harum ratione tempora quisquam aperiam optio reprehenderit, illo totam adipisci in.
            ',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur vero amet maxime, repellendus veritatis non error cupiditate quod officiis. Magnam maiores nisi dolores rem, error quis dolore ex quae culpa? Provident hic recusandae doloribus autem rerum incidunt quisquam officia quas similique a deserunt, fugit magni nihil cumque necessitatibus porro soluta fugiat officiis corrupti debitis. Dolore omnis fugiat, dolor minima voluptatem tenetur, ducimus, perspiciatis odio dolores dignissimos earum eos facere. Ullam accusamus ut est reiciendis excepturi error fugiat fuga. Dolore inventore reprehenderit necessitatibus a, earum mollitia eaque provident debitis placeat temporibus officia, possimus consequatur dolores blanditiis iure, aliquam totam sunt ducimus et molestias. Sequi quae nisi dolor dolorem explicabo. Ad laboriosam vero sit sunt, maxime nisi voluptas beatae quisquam minus enim.
            ',
            'category_id' => 2,
            'user_id' => 4

        ]);

        Post::create([
            'title' => 'Linux Ubuntu New Latest',
            'slug' => 'linux-ubuntu-new-latest',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat minus nobis facilis rerum itaque corrupti libero, corporis nulla distinctio harum ratione tempora quisquam aperiam optio reprehenderit, illo totam adipisci in.
            ',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur vero amet maxime, repellendus veritatis non error cupiditate quod officiis. Magnam maiores nisi dolores rem, error quis dolore ex quae culpa? Provident hic recusandae doloribus autem rerum incidunt quisquam officia quas similique a deserunt, fugit magni nihil cumque necessitatibus porro soluta fugiat officiis corrupti debitis. Dolore omnis fugiat, dolor minima voluptatem tenetur, ducimus, perspiciatis odio dolores dignissimos earum eos facere. Ullam accusamus ut est reiciendis excepturi error fugiat fuga. Dolore inventore reprehenderit necessitatibus a, earum mollitia eaque provident debitis placeat temporibus officia, possimus consequatur dolores blanditiis iure, aliquam totam sunt ducimus et molestias. Sequi quae nisi dolor dolorem explicabo. Ad laboriosam vero sit sunt, maxime nisi voluptas beatae quisquam minus enim.
            ',
            'category_id' => 4,
            'user_id' => 3

        ]);
    }
}