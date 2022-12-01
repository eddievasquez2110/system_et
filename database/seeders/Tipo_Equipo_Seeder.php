<?php

namespace Database\Seeders;

use App\Models\Tipo_Equipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Tipo_Equipo_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'LAPTOP',
            'Imagen' => '1',
        ]);

        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'CPU',
            'Imagen' => '2',
        ]);

        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'MONITOR',
            'Imagen' => '3',
        ]);

        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'IMPRESORA TONER BLANCO Y NEGRO',
            'Imagen' => '4',
        ]);

        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'IMPRESORA TINTA COLORES',
            'Imagen' => '5',
        ]);

        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'PROYECTOR',
            'Imagen' => '6',
        ]);

        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'PANTALLA INTERACTIVA',
            'Imagen' => '7',
        ]);

        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'DISCO DURO EXTERNO',
            'Imagen' => '8',
        ]);
        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'DISCO DURO EXTERNO',
            'Imagen' => '9',
        ]);
    }
}
