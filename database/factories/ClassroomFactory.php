<?php

namespace Database\Factories;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClassroomFactory extends Factory
{
    public function definition(): array
    {
        $tingkat = ['X', 'XI', 'XII'];
        $jurusan = ['RPL', 'DG', 'TG', '2D', '3D'];

        return [
            'name' => $this->faker->randomElement($tingkat) . ' ' . $this->faker->randomElement($jurusan) . ' ' . $this->faker->numberBetween(1, 3),
            'description' => 'Ruang kelas untuk ' . $this->faker->sentence(3),
        ];
    }
}
