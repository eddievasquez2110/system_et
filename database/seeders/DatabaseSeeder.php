<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Especificacion_Software;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call(Especificacion_Software_Seeder::class);
       $this->call(Tipo_Equipo_Seeder::class);
       $this->call(Uso_Equipo_Seeder::class);
    }
}
