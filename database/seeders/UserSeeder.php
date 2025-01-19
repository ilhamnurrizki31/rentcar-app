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
        User::create([
            'name' => 'test1',
            'email' => 'test1@gmail.com',
            'password' => Hash::make('test'),
            'address' => 'test',
            'phone' => 'test',
            'sim_number' => 'test',
        ]);
    }
}
