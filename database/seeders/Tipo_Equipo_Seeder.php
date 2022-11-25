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
        ]);

        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'CPU',
        ]);

        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'MONITOR',
        ]);

        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'IMPRESORA TONER BLANCO Y NEGRO',
        ]);

        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'IMPRESORA TINTA COLORES',
        ]);

        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'PROYECTOR',
        ]);

        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'PANTALLA INTERACTIVA',
        ]);

        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'DISCO DURO EXTERNO',
        ]);
    }
}
