<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User role
        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);

        // Penjual role
        User::create([
            'name' => 'Penjual',
            'email' => 'penjual@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'penjual',
        ]);
    }
}
