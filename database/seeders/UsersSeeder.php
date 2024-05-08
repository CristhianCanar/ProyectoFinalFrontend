<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'rol_id' => 1,
            'name' => 'Pepito',
            'email' => 'estudiante@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'rol_id' => 2,
            'name' => 'Juanito',
            'email' => 'profesor@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'rol_id' => 3,
            'name' => 'DEcano',
            'email' => 'decano@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
