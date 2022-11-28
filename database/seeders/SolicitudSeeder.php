<?php

namespace Database\Seeders;

use App\Models\Solicitud;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class SolicitudSeeder extends Seeder
{

    public function run()
    {
        $solicitud = Solicitud::create([
            'id' => 1,
            'Fecha_Solicitud'=>'2022-11-10 12:30:12',
            'Estado_Solicitud'=>'Aceptado',
        ]);

        $solicitud = Solicitud::create([
            'id' => 1,
            'Fecha_Solicitud'=>'2022-11-10 12:35:12',
            'Estado_Solicitud'=>'Rechazado',
        ]);

        $solicitud = Solicitud::create([
            'id' => 1,
            'Fecha_Solicitud'=>'2022-11-10 12:50:12',
            'Estado_Solicitud'=>'Pendiente',
        ]);
    }
}
