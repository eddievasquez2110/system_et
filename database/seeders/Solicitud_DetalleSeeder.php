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
            'ID_Especificacion_Equipo'=>1,
            'Cantidad_Equipo'=>1,
            'Descripcion_SolicitudDetalle'=>'Es la primera solicitud que se realiza',
        ]);
        $solicitud_detalle = Solicitud_Detalle::create([
            'ID_Solicitud'=>2,
            'ID_Especificacion_Equipo'=>1,
            'Cantidad_Equipo'=>4,
            'Descripcion_SolicitudDetalle'=>'Segunda solicitud',
        ]);
        $solicitud_detalle = Solicitud_Detalle::create([
            'ID_Solicitud'=>3,
            'ID_Especificacion_Equipo'=>3,
            'Cantidad_Equipo'=>7,
            'Descripcion_SolicitudDetalle'=>'Tercera solicitud',
        ]);
    }
}
