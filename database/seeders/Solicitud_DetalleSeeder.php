<?php

namespace Database\Seeders;

use App\Models\Solicitud_Detalle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class Solicitud_DetalleSeeder extends Seeder
{

    public function run()
    {
        $solicitud_detalle = Solicitud_Detalle::create([
            'ID_Solicitud'=>1,
            'ID_Tipo_Equipo'=>1,
            'ID_Uso_Equipo'=>2,
            'Cantidad_Equipo'=>1
        ]);
        $solicitud_detalle = Solicitud_Detalle::create([
            'ID_Solicitud'=>2,
            'ID_Tipo_Equipo'=>1,
            'ID_Uso_Equipo'=>2,
            'Cantidad_Equipo'=>4
        ]);
        $solicitud_detalle = Solicitud_Detalle::create([
            'ID_Solicitud'=>3,
            'ID_Tipo_Equipo'=>3,
            'ID_Uso_Equipo'=>2,
            'Cantidad_Equipo'=>7
        ]);
        $solicitud_detalle = Solicitud_Detalle::create([
            'ID_Solicitud'=>4,
            'ID_Tipo_Equipo'=>6,
            'ID_Uso_Equipo'=>2,
            'Cantidad_Equipo'=>7
        ]);
    }
}
