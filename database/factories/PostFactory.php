<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->realText(50);
        $paragraphs = $this->faker->paragraphs(mt_rand(5, 10));
        $post = "<h1>{$title}</h1>";
        foreach ($paragraphs as $para) {
            $post .= "<p>{$para}</p>";
        }
        return [
            'title' => $title,
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            'body' =>  $post,
            'user_id' => mt_rand(1, 10),
            'category_id' => mt_rand(1, 5)
        ];
    }
}