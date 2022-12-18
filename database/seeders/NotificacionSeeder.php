<?php

namespace Database\Seeders;

use App\Models\Notificacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Oficina;


class NotificacionSeeder extends Seeder
{
    
    public function run()
    {

        $ofi = Notificacion::create([
            'Nombre_User' => 'Javier Qquispe',
            'Email_User' => 'Recursos humanos',
            'Asunto_User' => 'creacion de correo',
            'Mensaje_User' => 'soy de la oficina de RRHH',
            'Estado' => 'aceptado',
        ]);
    
    }
}
