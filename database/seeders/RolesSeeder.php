<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rol::create([
            'id' => 1,
            'rol' => 'Estudiante'
        ]);

        Rol::create([
            'id' => 2,
            'rol' => 'Docente'
        ]);

        Rol::create([
            'id' => 3,
            'rol' => 'Decano'
        ]);
    }
}
