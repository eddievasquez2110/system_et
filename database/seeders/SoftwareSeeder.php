<?php

namespace Database\Seeders;

use App\Models\Software;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SoftwareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $especificacions = Software::create([
            'ID_Version' => '1',
            'ID_Especificacion_Software' => '1',
            'Nombre_Software' => 'Microsoft Office',
            'Descripcion_Software' => '1',
        ]);

        $especificacions = Software::create([
            'ID_Version' => '2',
            'ID_Especificacion_Software' => '2',
            'Nombre_Software' => 'AutoCad',
            'Descripcion_Software' => '1',
        ]);

        $especificacions = Software::create([
            'ID_Version' => '3',
            'ID_Especificacion_Software' => '3',
            'Nombre_Software' => 'Adove Reader',
            'Descripcion_Software' => '1',
        ]);
    }
}
