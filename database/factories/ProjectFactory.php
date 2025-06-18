<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'user_id' => User::first()->id,
            'status' => fake()->randomElement(['To Do', 'Done', 'Active']),
            'description' => fake()->sentence(40),
            'budget' => fake()->randomNumber(4)
            
        ];
    }
}