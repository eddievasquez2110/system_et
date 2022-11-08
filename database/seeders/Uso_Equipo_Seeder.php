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
        $uso_equipo = new Uso_Equipo();
        $uso_equipo->Nombre_Uso_Equipo="Uso Escritorio";
        $uso_equipo->save();

        $uso_equipo1 = new Uso_Equipo();
        $uso_equipo1->Nombre_Uso_Equipo="Uso de Direccion";
        $uso_equipo1->save();

        $uso_equipo2 = new Uso_Equipo();
        $uso_equipo2->Nombre_Uso_Equipo="Uso de Procesamiento Grafico";
        $uso_equipo2->save();
    }
}
