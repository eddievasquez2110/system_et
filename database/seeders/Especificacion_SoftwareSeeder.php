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

            'Procesador' => 'Doble núcleo de 1GHz',
            'EspacioDisco' => '4 GB',
            'SistemaOperativo' => 'Windows 10',
            'TamañoARAM' => '4 GB',

        ]);

        $especificacion_software = Especificacion_Software::create([
            'Procesador' => '2.5 - 2.9 GHz',
            'EspacioDisco' => '7 GB',
            'SistemaOperativo' => 'Windows 10',
            'TamañoARAM' => '8 GB',
            'TarjetaVideo' => '1 GB',
        ]);

        $especificacion_software = Especificacion_Software::create([
            'Procesador' => '1.5 GHz',
            'EspacioDisco' => '680 MB',
            'SistemaOperativo' => 'Windows 10',
            'TamañoARAM' => '1 GB',
            'TarjetaVideo' => '',
        ]);

        
    }
}
