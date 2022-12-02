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
            'Imagen' => '/1.jpg',
        ]);

        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'Laptop',
            'Imagen' => '/2.jpg',
        ]);

        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'MONITOR',
            'Imagen' => '/3.jpg',
        ]);

        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'IMPRESORA TONER BLANCO Y NEGRO',
            'Imagen' => '/4.jpg',
        ]);

        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'IMPRESORA TINTA COLORES',
            'Imagen' => '/5.jpg',
        ]);

        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'PROYECTOR',
            'Imagen' => '/6.jpg',
        ]);

        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'PANTALLA INTERACTIVA',
            'Imagen' => '/7.jpg',
        ]);

        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'DISCO DURO EXTERNO',
            'Imagen' => '/8.jpg',
        ]);

        $tipoEquipo = Tipo_Equipo::create([
            'Nombre_Tipo_Equipo' => 'TABLET',
            'Imagen' => '/9.jpg',
        ]);
    }
}
