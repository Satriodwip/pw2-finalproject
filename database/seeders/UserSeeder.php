<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => 1,
            'fullname' => 'Achmad Fauzi',
            'username' => 'Oji',
            'password' => 'ojitampan',
            'email' => 'oji123@gmail.com',
        ]);
       
        User::create([
            'id' => 2,
            'fullname' => 'Satrio Dwi Pujianto',
            'username' => 'Iyo',
            'password' => 'iyoajah',
            'email' => 'iyaww02@gmail.com',
        ]);
       
        User::create([
            'id' => 3,
            'fullname' => 'Ilham Rava Syah Putra',
            'username' => 'Rav',
            'password' => 'ravapa',
            'email' => 'ravaa03gmail.com',
        ]);
       
        User::create([
            'id' => 4,
            'fullname' => 'Fadhlur Rachman Suwandi',
            'username' => 'Man',
            'password' => 'rahmansayang',
            'email' => 'rachman04@gmail.com',
        ]);
        User::create([
            'id' => 5,
            'fullname' => 'Ahmad Gopal',
            'username' => 'Gopal',
            'password' => 'gopalkuat',
            'email' => 'gopal12@gmail.com',
        ]);
       
    }
}