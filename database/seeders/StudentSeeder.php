<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        // Akan meng-generate 50 data siswa
        Student::factory()->count(10)->create();
    }
}
