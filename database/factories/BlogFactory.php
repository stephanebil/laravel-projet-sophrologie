<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title" => fake()->sentence(),
            "content" => fake()->paragraph(10),
            "url_img" =>  "https://source.unsplash.com/random/640x480",
            "author" => fake()->name(),
            "created_at" => now(),
        ];
    }
}
