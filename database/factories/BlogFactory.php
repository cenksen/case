<?php

namespace Database\Factories;

use App\Models\Category;
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
    public function definition(): array
    {

        return [
            'category_id' => Category::factory(),
            'title' => $this->faker->sentence(10),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->text(50),
            'body' => $this->faker->paragraph(10),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
