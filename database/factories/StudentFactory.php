<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
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
        // Daftar mata kuliah untuk dipilih secara acak
        $coursePool = [
            'Kalkulus Dasar',
            'Pemrograman Web',
            'Basis Data',
            'Struktur Data',
            'Jaringan Komputer',
            'Sistem Operasi',
            'Kecerdasan Buatan',
            'Manajemen Proyek TI'
        ];

        return [
            'name' => fake()->name(),
            'nim' => fake()->unique()->numerify('10######'), // Membuat NIM 8 digit unik
            'study_program' => fake()->randomElement([
                'Teknik Informatika',
                'Sistem Informasi',
                'Manajemen Bisnis',
                'Akuntansi',
                'Desain Komunikasi Visual'
            ]),
            'gpa' => fake()->randomFloat(2, 2.75, 4.00), // IPK antara 2.75 dan 4.00
            'courses' => fake()->randomElements($coursePool, fake()->numberBetween(3, 5)) // Ambil 3-5 mata kuliah
        ];
    }
}