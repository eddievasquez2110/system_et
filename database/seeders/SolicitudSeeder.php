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
            'Documento'=>'1.pdf',
        ]);

        $solicitud = Solicitud::create([
            'id' => 3,
            'Documento'=>'test1.pdf',
        ]);

        $solicitud = Solicitud::create([
            'id' => 2,
            'Documento'=>'plataforma de cursos.pdf',
        ]);
        $solicitud = Solicitud::create([
            'id' => 3,
            'Documento'=>'Presentacion_Avances.pdf',
        ]);
        $solicitud = Solicitud::create([
            'id' => 3,
            'Documento'=>'INFORME_CARRITO_ARDUINO.pdf',
        ]);
        $solicitud = Solicitud::create([
            'id' => 3,
            'Documento'=>'pdf_file.pdf',
        ]);
        $solicitud = Solicitud::create([
            'id' => 3,
            'Documento'=>'pdf_file.pdf',
        ]);
        
    }
}
