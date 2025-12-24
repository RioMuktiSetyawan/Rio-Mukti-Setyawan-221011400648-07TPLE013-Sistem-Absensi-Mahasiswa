<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Buat 1 mahasiswa spesifik untuk testing
        Student::factory()->create([
            'name' => 'Budi Santoso',
            'nim' => '12345678',
            'study_program' => 'Teknik Informatika',
            'gpa' => 3.85,
            'courses' => ['Pemrograman Web', 'Basis Data', 'Kecerdasan Buatan']
        ]);

        // 2. Buat 49 mahasiswa acak lainnya
        // Total akan ada 50 mahasiswa
        Student::factory()->count(49)->create();
    }
}