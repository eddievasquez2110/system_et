<?php

namespace Database\Seeders;

use App\Models\Tipo_Equipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class Tipo_EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'CPU',
            'Imagen' => 'equipos/1.jpg',
        ]);

        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'Laptop',
            'Imagen' => 'equipos/2.jpg',
        ]);

        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'MONITOR',
            'Imagen' => 'equipos/3.jpg',
        ]);

        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'IMPRESORA TONER BLANCO Y NEGRO',
            'Imagen' => 'equipos/4.jpg',
        ]);

        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'IMPRESORA TINTA COLORES',
            'Imagen' => 'equipos/5.jpg',
        ]);

        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'PROYECTOR',
            'Imagen' => 'equipos/6.jpg',
        ]);

        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'PANTALLA INTERACTIVA',
            'Imagen' => 'equipos/7.jpg',
        ]);

        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'DISCO DURO EXTERNO',
            'Imagen' => 'equipos/8.jpg',
        ]);

        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'TABLET',
            'Imagen' => 'equipos/9.jpg',
        ]);
    }
}
