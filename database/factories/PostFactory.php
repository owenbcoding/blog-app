<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'title' => $this->faker->sentence,
            'thumbnail' => null,
            'slug' => $this->faker->slug,
            'excerpt' => $this->faker->paragraph,
            'body' => $this->faker->paragraph(),
            'published_at' => $this->faker->optional()->dateTimeBetween("-1 month", "+1 month")
        ];
    }
}
