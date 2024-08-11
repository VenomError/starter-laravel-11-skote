<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => fake()->name(),
            'phone' => fake()->phoneNumber(),
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => 'password',
            'is_admin' => true,
        ]);
    }
}
