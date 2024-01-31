<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'carTitle'         => fake()->name(),
            'content'   => fake()->text(),

            'luggage'   => fake()->numberBetween(1, 4),
            'doors'   => fake()->numberBetween(1, 4),
            'passengers'   => fake()->numberBetween(1, 4),
            'price'   => fake()->randomFloat(2, 10, 500000),
            'active'     => 1,
            'image'         => fake()->randomElement(['1702155460.jpg', '1702155530.jpg', '1702155555.jpg', '1702156047.jpg', '1702156168.jpg', '1702156160.jpg', '1702156151.jpg']),
            'category_id'   => fake()->numberBetween(1, 10)
        ];
    }
}
