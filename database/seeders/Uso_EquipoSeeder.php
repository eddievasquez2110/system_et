<?php

namespace Database\Seeders;

use App\Models\Uso_Equipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class Uso_EquipoSeeder extends Seeder
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
