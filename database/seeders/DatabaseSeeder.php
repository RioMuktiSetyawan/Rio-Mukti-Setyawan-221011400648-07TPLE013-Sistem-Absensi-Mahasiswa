<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Membuat User ADMIN
        User::create([
            'name' => 'Admin Rio',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        // Membuat User DOSEN
        User::create([
            'name' => 'Dosen Pengampu',
            'email' => 'dosen@gmail.com',
            'password' => Hash::make('password123'),
            'role' => 'user', // Kita gunakan 'user' sesuai default sebelumnya
        ]);
    }
}