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
            'Estado_Solicitud'=>'Aceptado',
            'Documento'=>'202212292210538.pdf',
        ]);

        $solicitud = Solicitud::create([
            'id' => 3,
            'Documento'=>'202212292328418.pdf',
        ]);

        $solicitud = Solicitud::create([
            'id' => 2,
            'Documento'=>'202212292227579.pdf',
        ]);
        $solicitud = Solicitud::create([
            'id' => 3,
            'Documento'=>'2022122923253310.pdf',
        ]);
        $solicitud = Solicitud::create([
            'id' => 3,
            'Documento'=>'2022122923260211.pdf',
        ]);
        $solicitud = Solicitud::create([
            'id' => 3,
            'Documento'=>'2022122923262012.pdf',
        ]);
        $solicitud = Solicitud::create([
            'id' => 3,
            'Documento'=>'2022122923263813.pdf',
        ]);
        
    }
}
