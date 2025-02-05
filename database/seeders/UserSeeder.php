<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //     'name' => 'admin1',
        //     'email' => 'admin1@gmail.com',
        //     'password' => Hash::make('admin'),
        //     'address' => 'admin',
        //     'phone' => 'admin',
        //     'sim_number' => 'admin',
        //     'role' => 'admin',
        // ]);

        User::create([
            'name' => 'user3',
            'email' => 'User3@gmail.com',
            'password' => Hash::make('user3'),
            'address' => 'User Bandung',
            'phone' => '01921323',
            'sim_number' => '23934834',
            'role' => 'user',
        ]);


        // johndoe
        // adminadmin

    }
}
