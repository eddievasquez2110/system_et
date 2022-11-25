<?php

namespace Database\Seeders;

use App\Models\Especificacion_Software;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Especificacion_SoftwareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $especificacion_software = Especificacion_Software::create([

            'ID_Software' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Procesador',
            'Especificacion' => 'Doble núcleo de 1GHz',
        ]);

        $especificacion_software = Especificacion_Software::create([
            
            'ID_Software' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Espacio de Disco',
            'Especificacion' => '4 GB',
        ]);

        $especificacion_software = Especificacion_Software::create([

            'ID_Software' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Sistema Operativo',
            'Especificacion' => 'Windows 10',
        ]);

        $especificacion_software = Especificacion_Software::create([

            'ID_Software' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Tamaño RAM',
            'Especificacion' => '8 GB',
        ]);

        $especificacion_software = Especificacion_Software::create([

            'ID_Software' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Tarjeta de Video',
            'Especificacion' => '1 GB',
        ]);
        
    }
}
