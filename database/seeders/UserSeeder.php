<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Ayesha',
                'email' => 'ayesha@example.com',
                'password' => Hash::make('password123'),
                'role_id' => 1, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'password' => Hash::make('password123'),
                'role_id' => 2, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mark Smith',
                'email' => 'mark@example.com',
                'password' => Hash::make('password123'),
                'role_id' => 2, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
