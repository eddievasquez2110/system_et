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
        $tipo_equipo = new Tipo_Equipo();
        $tipo_equipo->Nombre_Tipo_Equipo="Laptop";
        $tipo_equipo->save();

        $tipo_equipo1 = new Tipo_Equipo();
        $tipo_equipo1->Nombre_Tipo_Equipo="CPU";
        $tipo_equipo1->save();

        $tipo_equipo2 = new Tipo_Equipo();
        $tipo_equipo2->Nombre_Tipo_Equipo="Monitor";
        $tipo_equipo2->save();

        $tipo_equipo3 = new Tipo_Equipo();
        $tipo_equipo3->Nombre_Tipo_Equipo="Impresora Toner Blanco y Negro";
        $tipo_equipo3->save();

        $tipo_equipo4 = new Tipo_Equipo();
        $tipo_equipo4->Nombre_Tipo_Equipo="Impresora Tinta Colores";
        $tipo_equipo4->save();

        $tipo_equipo5 = new Tipo_Equipo();
        $tipo_equipo5->Nombre_Tipo_Equipo="Proyector";
        $tipo_equipo5->save();

        $tipo_equipo6 = new Tipo_Equipo();
        $tipo_equipo6->Nombre_Tipo_Equipo="Pantalla Interactiva";
        $tipo_equipo6->save();

        $tipo_equipo7 = new Tipo_Equipo();
        $tipo_equipo7->Nombre_Tipo_Equipo="Disco duro externo";
        $tipo_equipo7->save();

        $tipo_equipo8 = new Tipo_Equipo();
        $tipo_equipo8->Nombre_Tipo_Equipo="Tablet";
        $tipo_equipo8->save();
    }
}
