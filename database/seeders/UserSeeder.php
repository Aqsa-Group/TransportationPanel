<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'مدیر سیستم',
            'email' => 'admin@example.com',
            'password' => Hash::make('123456'),
            'phone' => '09123456789',
            'address' => 'هرات ، افغانستان',
            'role' => 'admin',
            'is_active' => true,
        ]);

        User::create([
            'name' => 'اپراتور',
            'email' => 'operator@example.com',
            'password' => Hash::make('123456'),
            'phone' => '09123456788',
            'role' => 'operator',
            'is_active' => true,
        ]);

        User::create([
            'name' => 'کاربر ساده',
            'email' => 'user@example.com',
            'password' => Hash::make('123456'),
            'role' => 'user',
            'is_active' => true,
        ]);
    }
}
