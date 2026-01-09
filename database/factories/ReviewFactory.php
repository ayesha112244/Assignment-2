<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    public function definition(): array
    {
        return [
            // Default values — overridden by ReviewSeeder
            'itinerary_id' => 1,
            'user_id' => 1,
            'rating' => fake()->numberBetween(1, 5),
            'comment' => fake()->sentence(10),
        ];
    }
}
