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
            'Nombre_Especificacion_Software' => 'Procesador',
            'Especificacion_Software' => 'Doble núcleo de 1GHz',
        ]);

        $especificacion_software = Especificacion_Software::create([
            
            'ID_Software' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Software' => 'Espacio de Disco',
            'Especificacion_Software' => '4 GB',
        ]);

        $especificacion_software = Especificacion_Software::create([

            'ID_Software' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Software' => 'Sistema Operativo',
            'Especificacion_Software' => 'Windows 10',
        ]);

        $especificacion_software = Especificacion_Software::create([

            'ID_Software' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Software' => 'Tamaño RAM',
            'Especificacion_Software' => '8 GB',
        ]);

        $especificacion_software = Especificacion_Software::create([

            'ID_Software' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Software' => 'Tarjeta de Video',
            'Especificacion_Software' => '1 GB',
        ]);
        
    }
}
