<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Foydalanuvchilarni fabrikada yaratish
//        User::factory()->count(100)->create();

        // Bosh foydalanuvchi ma'lumotlarini qo'shish
        $admin = [
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => bcrypt('123456789'),
            'remember_token' => null,
        ];

        // Foydalanuvchi ma'lumotlarini qo'shish
        User::create($admin);
    }
}
