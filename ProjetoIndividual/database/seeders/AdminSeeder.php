<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@academia.com'],
            [
                'name' => 'Administrador',
                'password' => Hash::make('senha123') 
            ]
        );
    }
}