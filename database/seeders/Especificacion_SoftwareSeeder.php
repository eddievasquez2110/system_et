<?php

namespace Database\Seeders;

use App\Models\Especificacion;
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
            'Procesador' => 'Intel Core i5 - 10va generacion o superior',
            'SistemaOpetativo'=>'Windows 10 Pro',
            'TamañoAlmancenamiento'=>'512GB SSD',
            'MemoriaRAM'=>'8 FB DDR4',
            'TarjetaVideo'=>'Integrada',
        ]);

        $especificacion_software = Especificacion_Software::create([
             'Procesador' => 'Intel Core i7 - 10va generacion o superior',
             'SistemaOpetativo'=>'Windows 10 Pro',
             'TamañoAlmancenamiento'=>'512GB SSD',
             'MemoriaRAM'=>'8 FB DDR4',
             'TarjetaVideo'=>'Integrada',
        ]);

        $especificacion_software = Especificacion_Software::create([
            'Procesador' => 'Intel Core i7 - 10va generacion o superior',
            'SistemaOpetativo'=>'Windows 10 Pro',
            'TamañoAlmancenamiento'=>'512GB SSD',
            'MemoriaRAM'=>'16GB DDR4 o superior',
            'TarjetaVideo'=>'Dedicado 2gb',
        ]);
    }
}
