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
            'ID_Uso_Equipo' => '1',
            'Nombre_Software' => 'SIGA',
            'Imagen' => '1.png',
            'Version_Software' => '2022',
            'Descripcion_Software' => 'Sistema de Gestión Administrativa, desarrollada por el Ministerio de Economia y Finanzas',
        ]);

        $especificacions = Software::create([
            'ID_Uso_Equipo' => '2',
            'Nombre_Software' => 'SIAF',
            'Imagen' => '2.png',
            'Version_Software' => '2022',
            'Descripcion_Software' => 'Sistema de Ejecución, desarrollada por el Ministerio de Economia y Finanzas',
        ]);

        $especificacions = Software::create([
            'ID_Uso_Equipo' => '1',
            'Nombre_Software' => 'Microsoft Office',
            'Imagen' => '3.png',
            'Version_Software' => '2016',
            'Descripcion_Software' => 'Microsoft Office es un conjunto de aplicaciones con las cuales podemos llevar a cabo tareas de ofimática, pudiendo automatizar y alcanzar un alto nivel de rendimiento en dichas tareas gracias a las herramientas que ofrece.',
        ]);

        $especificacions = Software::create([
            'ID_Uso_Equipo' => '3',
            'Nombre_Software' => 'Any Desk',
            'Imagen' => '4.png',
            'Version_Software' => '2022',
            'Descripcion_Software' => 'Sistema de Ejecución, desarrollada por el Ministerio de Economia y Finanzas',
        ]);

        $especificacions = Software::create([
            'ID_Uso_Equipo' => '1',
            'Nombre_Software' => 'Adobe Acrobat',
            'Imagen' => '5.png',
            'Version_Software' => '2016',
            'Descripcion_Software' => 'Adobe Reader es una aplicación que te permite ver, imprimir y buscar en documentos PDF a través de una interfaz.',
        ]);

        $especificacions = Software::create([
            'ID_Uso_Equipo' => '2',
            'Nombre_Software' => 'AutoCad',
            'Imagen' => '6.png',
            'Version_Software' => '2016',
            'Descripcion_Software' => 'AutoCAD es un software de diseño asistido por computadora (CAD) que se utiliza para dibujar, diseñar y modelar en 2D y 3D de forma precisa con sólidos, superficies, objetos de malla, características de documentación, etc.',
        ]);

        $especificacions = Software::create([
            'ID_Uso_Equipo' => '3',
            'Nombre_Software' => 'Zoom',
            'Imagen' => '7.png',
            'Version_Software' => '2022',
            'Descripcion_Software' => 'Software gratuito, utilizado para realizar reuniones o acceder a reuniones virtuales',
        ]);

        $especificacions = Software::create([
            'ID_Uso_Equipo' => '1',
            'Nombre_Software' => 'FoxPro',
            'Imagen' => '8.png',
            'Version_Software' => '2022',
            'Descripcion_Software' => 'Sistema de Gestor de Base de datos y lenguaje de programación orientado a procedimientos',
        ]);
        
    }
}
