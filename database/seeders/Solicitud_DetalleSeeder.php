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
            'ID_Especificacion_Software'=>1,
            'Descripcion_SolicitudDetalle'=>'Es la primera solicitud que se realiza',
        ]);
    }
}
