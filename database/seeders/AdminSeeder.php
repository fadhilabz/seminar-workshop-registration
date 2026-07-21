<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'dil123@seminarku.test'],
            [
                'name' => 'Admin Dil',
                'username' => 'dil123',
                'password' => Hash::make('dil123'),
                'role' => 'admin',
                'email_verified_at' => now(),
            ]
        );
    }
}
