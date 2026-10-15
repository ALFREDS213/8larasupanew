<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'christian@example.com'],
            [
                'name' => 'Christian Yusuf Alfred',
                'password' => 'password123',
            ]
        );

        User::updateOrCreate(
            ['email' => 'budi@example.com'],
            [
                'name' => 'Budi Santoso',
                'password' => 'password123',
            ]
        );

        User::updateOrCreate(
            ['email' => 'siti@example.com'],
            [
                'name' => 'Siti Aminah',
                'password' => 'password123',
            ]
        );
    
    }
}
