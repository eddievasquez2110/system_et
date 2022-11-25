<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Uso_Equipo;
class Uso_Equipo_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usoEquipo = Uso_Equipo::create([
            'Nombre_Uso_Equipo' => 'Uso de escritorio',
        ]);

        $usoEquipo = Uso_Equipo::create([
            'Nombre_Uso_Equipo' => 'Uso de dirección',
        ]);

        $usoEquipo = Uso_Equipo::create([
            'Nombre_Uso_Equipo' => 'Uso de procesamiento gráfico',
        ]);

        $usoEquipo = Uso_Equipo::create([
            'Nombre_Uso_Equipo' => 'Uso de general',
        ]);
    }
}
