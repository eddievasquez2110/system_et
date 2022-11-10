<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolSeeder extends Seeder

{
    public function run()
    {
        $rol = Rol::create([
            'Nombre_Rol' => 'Super Administrador',
        ]);

        $rol = Rol::create([
            'Nombre_Rol' => 'Administrador',
        ]);

        $rol = Rol::create([
            'Nombre_Rol' => 'Usuario',
        ]);
       
    }
}
