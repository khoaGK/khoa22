<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Avatar; // Nhớ thêm dòng này để tạo được Avatar
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Tạo 1 User duy nhất
        $user = User::create([
            'name' => 'KHOA22',
            'email' => 'aloneacc195@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        // 2. Tạo Avatar cho User đó (Quan hệ 1-1)
        Avatar::create([
            'url' => 'avatar_default.jpg',
            'user_id' => $user->id,
        ]);
    }
}