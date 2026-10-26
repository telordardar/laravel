<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'nis' => fake()->unique()->numerify('2024###'),
        'name' => fake()->name(),
        'classroom' => fake()->randomElement(['XI PPLG 1', 'XI PPLG 2', 'XI PPLG 3']),
    ];
}
}
