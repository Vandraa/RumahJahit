<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'Admin',
                'email'=>'Admin@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('12345678'),
            ],
            [
                'name'=>'User',
                'email'=>'User@gmail.com',
                'role'=>'user',
                'password'=>bcrypt('12345678'),
            ]
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
