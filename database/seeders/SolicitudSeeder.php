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
            'Fecha_Solicitud'=>'2022-12-09 17:13:00',
        ]);
        $solicitud = Solicitud::create([
            'id' => 2,
            'Fecha_Solicitud'=>'2022-12-05 12:57:00',
        ]);
    }
}
