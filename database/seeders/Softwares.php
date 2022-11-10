<?php

namespace Database\Seeders;

use App\Models\Software;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Softwares extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $especificacions = Software::create([
            'ID_Version' => '',
            'ID_Especificacion_Software' => '',
            'Nombre_Software' => 'Microsoft Office',
            'Descripcion_Software' => 'Microsoft Office es un conjunto de aplicaciones con las cuales podemos llevar a cabo tareas de ofimática, pudiendo automatizar y alcanzar un alto nivel de rendimiento en dichas tareas gracias a las herramientas que ofrece.',
        ]);

        $especificacions = Software::create([
            'ID_Version' => '',
            'ID_Especificacion_Software' => '',
            'Nombre_Software' => 'AutoCad',
            'Descripcion_Software' => 'AutoCAD es un software de diseño asistido por computadora (CAD) que se utiliza para dibujar, diseñar y modelar en 2D y 3D de forma precisa con sólidos, superficies, objetos de malla, características de documentación, etc.',
        ]);

        $especificacions = Software::create([
            'ID_Version' => '',
            'ID_Especificacion_Software' => '',
            'Nombre_Software' => 'Adove Reader',
            'Descripcion_Software' => 'Adobe Reader es una aplicación que te permite ver, imprimir y buscar en documentos PDF a través de una interfaz.',
        ]);
    }
}
