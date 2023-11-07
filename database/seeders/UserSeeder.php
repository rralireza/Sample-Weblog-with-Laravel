<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'مدیر',
            'lastname' => 'وب سایت',
            'email' => 'admin@email.com',
            'username' => 'admin',
            'password' => Hash::make('1'),
            'image' => 'public/images/users/man.png',
            'is_admin' => 1,
            'about' => 'من مدیر وب سایت خبری هستم. به عنوان ادمین، تمامی امکانات این سیستم دردسترس من قرار دارد.'
        ]);
    }
}
