<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin Utama',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'User Mahasiswa',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password123'),
            'role' => 'user',
        ]);

        Mahasiswa::create([
            'nim' => '25781051',
            'nama' => 'Yenita Uma Farida',
            'program_studi' => 'Manajemen Informatika',
            'email' => 'ray101583@gmail.com',
            'angkatan' => 2025,
        ]);
    }
}