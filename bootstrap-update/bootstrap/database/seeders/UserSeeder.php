<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'username' => 'admin1', 
                'password' => Hash::make('admin'),
                'roles' => 'admin'
            ],

            [
                'username' => 'super_visor',
                'password' => Hash::make('123456789'),
                'roles' => 'supervisor'
            ],

            [
                'username' => 'budispeed',
                'password' => Hash::make('bolobolo'),
                'roles' => 'visitor'
            ]
        ]);
    }
}
