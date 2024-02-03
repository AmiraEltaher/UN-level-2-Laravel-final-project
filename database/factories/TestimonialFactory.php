<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'         => fake()->name(),
            'position'   => fake()->text(),
            'content'   => fake()->text(),
            'published'     => 1,
            'image'         => fake()->randomElement(['1702155460.jpg', '1702155530.jpg', '1702155555.jpg', '1702156047.jpg', '1702156168.jpg', '1702156160.jpg', '1702156151.jpg']),

        ];
    }
}
