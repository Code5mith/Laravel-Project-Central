<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BacklogItem>
 */
class BacklogItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => fake()->company(),
            // project id 
            "description" => fake()->sentence(15),
            "priority" => fake()->randomDigitNotZero(),
            "status" => fake()->randomElement(['To Do', 'Done', 'Active']),
            "story_points" => fake()->randomDigitNotZero(),
        ];
    }
}
