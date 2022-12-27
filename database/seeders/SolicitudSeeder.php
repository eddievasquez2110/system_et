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
            'Fecha_Solicitud'=>'2022-11-09',
            'Estado_Solicitud'=>'Aceptado',
            'Documento'=>'1.pdf',
        ]);

        $solicitud = Solicitud::create([
            'id' => 3,
            'Fecha_Solicitud'=>'2022-12-26',
            'Documento'=>'test1.pdf',
        ]);

        $solicitud = Solicitud::create([
            'id' => 2,
            'Fecha_Solicitud'=>'2022-12-10',
            'Documento'=>'plataforma de cursos.pdf',
        ]);
        $solicitud = Solicitud::create([
            'id' => 3,
            'Fecha_Solicitud'=>'2022-12-16',
            'Documento'=>'Presentacion_Avances.pdf',
        ]);
        $solicitud = Solicitud::create([
            'id' => 3,
            'Fecha_Solicitud'=>'2022-12-18',
            'Documento'=>'INFORME_CARRITO_ARDUINO.pdf',
        ]);
        $solicitud = Solicitud::create([
            'id' => 3,
            'Fecha_Solicitud'=>'2022-12-24',
            'Documento'=>'pdf_file.pdf',
        ]);
        $solicitud = Solicitud::create([
            'id' => 3,
            'Fecha_Solicitud'=>'2022-12-25',
            'Documento'=>'pdf_file.pdf',
        ]);
        
    }
}
