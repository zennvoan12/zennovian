<?php

namespace App\Models;


class Post
{

    private static $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Muhammad Farhan Novian',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam atque architecto quam a minus autem ipsam eligendi similique, sequi cumque, ratione id beatae quae,',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam atque architecto quam a minus autem ipsam eligendi similique, sequi cumque, ratione id beatae quae, quibusdam cum quos ab eos. Perferendis et sint, quos incidunt, ea aspernatur impedit facere error maxime esse reiciendis nulla ullam nesciunt ipsam itaque perspiciatis tempore est asperiores amet, nemo dolorem praesentium illo quidem. Molestiae, incidunt fugit explicabo cupiditate blanditiis recusandae id porro dolorem distinctio, ex officia omnis cum provident veritatis facilis in debitis suscipit! Aperiam, enim.
        '
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Muhammad Farhan Novian',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam atque architecto quam a minus autem ipsam eligendi similique, sequi cumque, ratione id beatae quae,',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam atque architecto quam a minus autem ipsam eligendi similique, sequi cumque, ratione id beatae quae, quibusdam cum quos ab eos. Perferendis et sint, quos incidunt, ea aspernatur impedit facere error maxime esse reiciendis nulla ullam nesciunt ipsam itaque perspiciatis tempore est asperiores amet, nemo dolorem praesentium illo quidem. Molestiae, incidunt fugit explicabo cupiditate blanditiis recusandae id porro dolorem distinctio, ex officia omnis cum provident veritatis facilis in debitis suscipit! Aperiam, enim.
        '
        ],
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Muhammad Farhan Novian',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam atque architecto quam a minus autem ipsam eligendi similique, sequi cumque, ratione id beatae quae,',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam atque architecto quam a minus autem ipsam eligendi similique, sequi cumque, ratione id beatae quae, quibusdam cum quos ab eos. Perferendis et sint, quos incidunt, ea aspernatur impedit facere error maxime esse reiciendis nulla ullam nesciunt ipsam itaque perspiciatis tempore est asperiores amet, nemo dolorem praesentium illo quidem. Molestiae, incidunt fugit explicabo cupiditate blanditiis recusandae id porro dolorem distinctio, ex officia omnis cum provident veritatis facilis in debitis suscipit! Aperiam, enim.Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, fugit! Assumenda repellat ducimus est, debitis porro blanditiis architecto, quis sit nemo dignissimos dicta sunt. Numquam id quas nulla nam facilis officiis similique ipsum non iusto, libero fugiat rem sapiente voluptate modi consectetur accusantium ipsam omnis voluptates quae magni tempore doloribus?
        '
        ],
    ];
    public static function all()
    {

        return self::$blog_posts;
    }

    public static function find($slug)
    {
        $posts = self::$blog_posts;
        $post = [];

        foreach ($posts as $p) {
            if ($p["slug"] === $slug) {
                $post = $p;
            }
        }

        return $post;
    }
}