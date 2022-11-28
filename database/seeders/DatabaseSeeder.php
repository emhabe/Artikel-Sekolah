<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Admin Dhea',
                'email' => 'dhea@gmail.com',
                'password' => bcrypt('admin12345'),
                'role' => 'admin',
                'remember_token' => Str::random(60),
            ],
            [
                'name' => 'Admin Desy',
                'email' => 'desy@gmail.com',
                'password' => bcrypt('admin12345'),
                'role' => 'admin',
                'remember_token' => Str::random(60),
            ]
        ];
        User::insert($data);
    }
}
