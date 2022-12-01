<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Especificacion_Software;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        $this->call(RolSeeder::class);
        $this->call(OficinaSeeder::class);
        $this->call(SoftwareSeeder::class);
        $this->call(Uso_EquipoSeeder::class);
        $this->call(Tipo_Equipo_Seeder::class);
        $this->call(EspecificacionSeeder::class);
        
        //uso equipo
        
        $this->call(UserSeeder::class);
        $this->call(SolicitudSeeder::class);
        $this->call(Solicitud_DetalleSeeder::class);
    }
}
