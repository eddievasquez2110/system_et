<?php

namespace Database\Seeders;

use App\Models\Especificacion_Equipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class Especificacion_EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Equipo' => 'Procesador',
            'Especificacion_Equipo' => 'Intel Core i5 , 10va generación o superior',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Equipo' => 'Memoria RAM',
            'Especificacion_Equipo' => '08 GB DDR4',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Equipo' => 'Disco Duro (Almacenamiento)',
            'Especificacion_Equipo' => '512 GB SSD',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Equipo' => 'Tarjeta de video',
            'Especificacion_Equipo' => 'integrada',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Equipo' => 'Sistema operativo',
            'Especificacion_Equipo' => 'Windows 10 Pro',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Equipo' => 'Velocidad del procesador',
            'Especificacion_Equipo' => '2.5 Ghz como mínimo',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Equipo' => 'Tamaño de pantalla',
            'Especificacion_Equipo' => 'Elegir entre 14” o 15.6” FHD',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Equipo' => 'Cámara Web / micrófono',
            'Especificacion_Equipo' => 'Sí - HD a 720p',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Equipo' => 'Lector de tarjeta de memoria',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Equipo' => 'Puerto RJ45',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Equipo' => 'Puertos HDMI',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Equipo' => 'Puertos USB',
            'Especificacion_Equipo' => 'Si (2 mínimo)',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Equipo' => 'Wi-Fi',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Equipo' => 'Conectividad Bluetooth',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Equipo' => 'Puerto Tipo C',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Equipo' => 'Suite de Ofimática',
            'Especificacion_Equipo' => 'No',
        ]);
        /* USO DIRECCION */
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '2',
            'Nombre_Especificacion_Equipo' => 'Procesador',
            'Especificacion_Equipo' => 'Intel Core i7 – 10va generación o superior',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '2',
            'Nombre_Especificacion_Equipo' => 'Memoria RAM',
            'Especificacion_Equipo' => '08 GB DDR4',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '2',
            'Nombre_Especificacion_Equipo' => 'Disco Duro (Almacenamiento)',
            'Especificacion_Equipo' => '512 GB SSD',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '2',
            'Nombre_Especificacion_Equipo' => 'Tarjeta de video',
            'Especificacion_Equipo' => 'integrada',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '2',
            'Nombre_Especificacion_Equipo' => 'Sistema operativo',
            'Especificacion_Equipo' => 'Windows 10 Pro',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '2',
            'Nombre_Especificacion_Equipo' => 'Velocidad del procesador',
            'Especificacion_Equipo' => '2.5 Ghz como mínimo',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '2',
            'Nombre_Especificacion_Equipo' => 'Tamaño de pantalla',
            'Especificacion_Equipo' => 'Elegir entre 14” o 15.6” FHD',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '2',
            'Nombre_Especificacion_Equipo' => 'Cámara Web / micrófono',
            'Especificacion_Equipo' => 'Sí - HD a 720p',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '2',
            'Nombre_Especificacion_Equipo' => 'Lector de tarjeta de memoria',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '2',
            'Nombre_Especificacion_Equipo' => 'Puerto RJ45',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '2',
            'Nombre_Especificacion_Equipo' => 'Puertos HDMI',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '2',
            'Nombre_Especificacion_Equipo' => 'Puertos USB',
            'Especificacion_Equipo' => 'Si (2 mínimo)',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '2',
            'Nombre_Especificacion_Equipo' => 'Wi-Fi',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '2',
            'Nombre_Especificacion_Equipo' => 'Conectividad Bluetooth',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '2',
            'Nombre_Especificacion_Equipo' => 'Puerto Tipo C',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '2',
            'Nombre_Especificacion_Equipo' => 'Suite de Ofimática',
            'Especificacion_Equipo' => 'No',
        ]);
        /* USO procesamiento grafico */
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '3',
            'Nombre_Especificacion_Equipo' => 'Procesador',
            'Especificacion_Equipo' => 'Intel Core i7 – 10va generación o superior',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '3',
            'Nombre_Especificacion_Equipo' => 'Memoria RAM',
            'Especificacion_Equipo' => '16GB DDR4 o superior',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '3',
            'Nombre_Especificacion_Equipo' => 'Disco Duro (Almacenamiento)',
            'Especificacion_Equipo' => '512 GB SSD',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '3',
            'Nombre_Especificacion_Equipo' => 'Tarjeta de video',
            'Especificacion_Equipo' => 'Dedicado 2gb',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '3',
            'Nombre_Especificacion_Equipo' => 'Sistema operativo',
            'Especificacion_Equipo' => 'Windows 10 Pro',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '3',
            'Nombre_Especificacion_Equipo' => 'Velocidad del procesador',
            'Especificacion_Equipo' => '2.5 Ghz como mínimo',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '3',
            'Nombre_Especificacion_Equipo' => 'Tamaño de pantalla',
            'Especificacion_Equipo' => 'Elegir entre 14” o 15.6” FHD',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '3',
            'Nombre_Especificacion_Equipo' => 'Cámara Web / micrófono',
            'Especificacion_Equipo' => 'Sí - HD a 720p',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '3',
            'Nombre_Especificacion_Equipo' => 'Lector de tarjeta de memoria',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '3',
            'Nombre_Especificacion_Equipo' => 'Puerto RJ45',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '3',
            'Nombre_Especificacion_Equipo' => 'Puertos HDMI',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '3',
            'Nombre_Especificacion_Equipo' => 'Puertos USB',
            'Especificacion_Equipo' => 'Si (2 mínimo)',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '3',
            'Nombre_Especificacion_Equipo' => 'Wi-Fi',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '3',
            'Nombre_Especificacion_Equipo' => 'Conectividad Bluetooth',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '3',
            'Nombre_Especificacion_Equipo' => 'Puerto Tipo C',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '3',
            'Nombre_Especificacion_Equipo' => 'Suite de Ofimática',
            'Especificacion_Equipo' => 'No',
        ]);
        /* lapto CPU*/

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Equipo' => 'Procesador',
            'Especificacion_Equipo' => 'Intel Core i5 – 10va generación o superior',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Equipo' => 'Memoria RAM',
            'Especificacion_Equipo' => '08 GB DDR4',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Equipo' => 'Disco Duro (Almacenamiento)',
            'Especificacion_Equipo' => '512 GB SSD',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Equipo' => 'Tarjeta de video',
            'Especificacion_Equipo' => 'integrada',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Equipo' => 'Sistema operativo',
            'Especificacion_Equipo' => 'Windows 10 Pro',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Equipo' => 'Velocidad del procesador',
            'Especificacion_Equipo' => '2.5 Ghz como mínimo',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Equipo' => 'Tamaño de pantalla',
            'Especificacion_Equipo' => 'Elegir entre 14” o 15.6” FHD',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Equipo' => 'Cámara Web / micrófono',
            'Especificacion_Equipo' => 'Sí - HD a 720p',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Equipo' => 'Lector de tarjeta de memoria',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Equipo' => 'Puerto RJ45',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Equipo' => 'Puertos HDMI',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Equipo' => 'Puertos USB',
            'Especificacion_Equipo' => 'Si (2 mínimo)',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Equipo' => 'Wi-Fi',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Equipo' => 'Conectividad Bluetooth',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Equipo' => 'Puerto Tipo C',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion_Equipo' => 'Suite de Ofimática',
            'Especificacion_Equipo' => 'No',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '2',
            'Nombre_Especificacion_Equipo' => 'Procesador',
            'Especificacion_Equipo' => 'Intel Core i7 – 10va generación o superior',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '2',
            'Nombre_Especificacion_Equipo' => 'Memoria RAM',
            'Especificacion_Equipo' => '08 GB DDR4',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '2',
            'Nombre_Especificacion_Equipo' => 'Disco Duro (Almacenamiento)',
            'Especificacion_Equipo' => '512 GB SSD',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '2',
            'Nombre_Especificacion_Equipo' => 'Tarjeta de video',
            'Especificacion_Equipo' => 'integrada',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '2',
            'Nombre_Especificacion_Equipo' => 'Sistema operativo',
            'Especificacion_Equipo' => 'Windows 10 Pro',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '2',
            'Nombre_Especificacion_Equipo' => 'Velocidad del procesador',
            'Especificacion_Equipo' => '2.5 Ghz como mínimo',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '2',
            'Nombre_Especificacion_Equipo' => 'Tamaño de pantalla',
            'Especificacion_Equipo' => 'Elegir entre 14” o 15.6” FHD',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '2',
            'Nombre_Especificacion_Equipo' => 'Cámara Web / micrófono',
            'Especificacion_Equipo' => 'Sí - HD a 720p',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '2',
            'Nombre_Especificacion_Equipo' => 'Lector de tarjeta de memoria',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '2',
            'Nombre_Especificacion_Equipo' => 'Puerto RJ45',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '2',
            'Nombre_Especificacion_Equipo' => 'Puertos HDMI',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '2',
            'Nombre_Especificacion_Equipo' => 'Puertos USB',
            'Especificacion_Equipo' => 'Si (2 mínimo)',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '2',
            'Nombre_Especificacion_Equipo' => 'Wi-Fi',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '2',
            'Nombre_Especificacion_Equipo' => 'Conectividad Bluetooth',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '2',
            'Nombre_Especificacion_Equipo' => 'Puerto Tipo C',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '2',
            'Nombre_Especificacion_Equipo' => 'Suite de Ofimática',
            'Especificacion_Equipo' => 'No',
        ]);
        /* USO procesamiento grafico */
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '3',
            'Nombre_Especificacion_Equipo' => 'Procesador',
            'Especificacion_Equipo' => 'Intel Core i7 – 10va generación o superior',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '3',
            'Nombre_Especificacion_Equipo' => 'Memoria RAM',
            'Especificacion_Equipo' => '16GB DDR4 o superior',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '3',
            'Nombre_Especificacion_Equipo' => 'Disco Duro (Almacenamiento)',
            'Especificacion_Equipo' => '512 GB SSD',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '3',
            'Nombre_Especificacion_Equipo' => 'Tarjeta de video',
            'Especificacion_Equipo' => 'Dedicado 2gb',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '3',
            'Nombre_Especificacion_Equipo' => 'Sistema operativo',
            'Especificacion_Equipo' => 'Windows 10 Pro',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '3',
            'Nombre_Especificacion_Equipo' => 'Velocidad del procesador',
            'Especificacion_Equipo' => '2.5 Ghz como mínimo',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '3',
            'Nombre_Especificacion_Equipo' => 'Tamaño de pantalla',
            'Especificacion_Equipo' => 'Elegir entre 14” o 15.6” FHD',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '3',
            'Nombre_Especificacion_Equipo' => 'Cámara Web / micrófono',
            'Especificacion_Equipo' => 'Sí - HD a 720p',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '3',
            'Nombre_Especificacion_Equipo' => 'Lector de tarjeta de memoria',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '3',
            'Nombre_Especificacion_Equipo' => 'Puerto RJ45',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '3',
            'Nombre_Especificacion_Equipo' => 'Puertos HDMI',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '3',
            'Nombre_Especificacion_Equipo' => 'Puertos USB',
            'Especificacion_Equipo' => 'Si (2 mínimo)',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '3',
            'Nombre_Especificacion_Equipo' => 'Wi-Fi',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '3',
            'Nombre_Especificacion_Equipo' => 'Conectividad Bluetooth',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '3',
            'Nombre_Especificacion_Equipo' => 'Puerto Tipo C',
            'Especificacion_Equipo' => 'Si',
        ]);

        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '3',
            'Nombre_Especificacion_Equipo' => 'Suite de Ofimática',
            'Especificacion_Equipo' => 'No',
        ]);
        /* MONITOR */
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '3',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Tamaño',
            'Especificacion_Equipo' => 'Entre 23” – 25”',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '3',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Cámara web ',
            'Especificacion_Equipo' => 'Integrado(Previa evaluación)',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '3',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Micrófono',
            'Especificacion_Equipo' => 'Integrado(Previa evaluación)',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '3',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'TIPO ',
            'Especificacion_Equipo' => 'Led',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '3',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Resolución',
            'Especificacion_Equipo' => 'Full HD 1920x1080',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '3',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'HDMI',
            'Especificacion_Equipo' => 'Si',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '3',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'VGA',
            'Especificacion_Equipo' => 'Opcional',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '3',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'DisplayPort',
            'Especificacion_Equipo' => 'Opcional',
        ]);
        /* IMPRESORA TONER BLANCO Y NEGRO*/
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '4',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Funciones ',
            'Especificacion_Equipo' => 'Impresión, copia, escaneado, fax',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '4',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Velocidad de impresión',
            'Especificacion_Equipo' => '22 – 32ppm',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '4',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Tecnología de Impresión',
            'Especificacion_Equipo' => 'Laser',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '4',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Calidad de Impresión en Negro (Optima)',
            'Especificacion_Equipo' => '>= 1200x1200 ppp',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '4',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Lenguaje de Impresión',
            'Especificacion_Equipo' => 'PCL 6, PCL 5, emulación de postscript nivel 3',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '4',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Impresión a Doble Cara',
            'Especificacion_Equipo' => 'Automática (estándar)',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '4',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Memoria, Estándar',
            'Especificacion_Equipo' => '256 MB',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '4',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Memoria, Estándar',
            'Especificacion_Equipo' => '256 MB',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '4',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Tamaños de Soportes de Impresión Admitidos',
            'Especificacion_Equipo' => 'Bandeja 1:A4, A5, A6, RA4, B5 8JIS), 10x15cm, Tarjeta postal (JIS), Dpostcard (JIS), Sobre (B5, C5, C6, DL); Bandeja 2, bandeja 3 opcional: A4, A5, A6, RA4, B5 (JIS), B6 (JIS), 10x15 cm Tarjeta postal (JIS), Dpostcard (JIS)',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '4',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Tipo De Escáner - Escaneado ADF Dúplex',
            'Especificacion_Equipo' => 'Cama plana, alimentador automático de documentos (ADF)',
        ]);
        /* TINTA COLORES*/
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '5',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Tecnología de impresión',
            'Especificacion_Equipo' => 'Sistema continuo',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '5',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Inyección de tinta',
            'Especificacion_Equipo' => 'de 4 colores (CMYK)',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '5',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Resolución máxima de impresión',
            'Especificacion_Equipo' => 'Hasta 5.760 x 1.440 dpi de resolución optimizada en varios tipos de papel',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '5',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Velocidad de impresión',
            'Especificacion_Equipo' => 'Máxima Negro 33 ppm y color 15 ppm 
            Normal Negro 10.5 ISO ppm y color 5 ISO ppm
            ',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '5',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Copias',
            'Especificacion_Equipo' => 'Resolución máxima de copiado 360 x 360 dpi Cantidad 1-20 copias (sin PC) Tamaño A4, carta',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '5',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Escaneo',
            'Especificacion_Equipo' => 'Tipo de digitalizador Cama plana con sensor de líneas CIS de color,
            Área de digitalización máxima 21.6 x 29.7 cm (8.5" x 11.7"),
            Resolución Óptica 600 dpi,
            Hardware 600 x1200 dpi,
            Interpolada 9.600 x 9.600 dpi.
            ',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '5',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Escaneo',
            'Especificacion_Equipo' => 'Tipo de digitalizador Cama plana con sensor de líneas CIS de color,
            Área de digitalización máxima 21.6 x 29.7 cm (8.5" x 11.7"),
            Resolución Óptica 600 dpi,
            Hardware 600 x1200 dpi,
            Interpolada 9.600 x 9.600 dpi.
            ',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '5',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Conectividad estándar y tipo',
            'Especificacion_Equipo' => 'USB con ADF mínimo 30 hojas',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '5',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Soporte de papel sin PC',
            'Especificacion_Equipo' => '89 x 127mm, carta/216 x 279 mm, A4/210 x 297 mm, legal/216 x 356 mm',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '5',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Soporte de papel sin PC',
            'Especificacion_Equipo' => '89 x 127mm, carta/216 x 279 mm, A4/210 x 297 mm, legal/216 x 356 mm',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '5',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Peso de papel soportado',
            'Especificacion_Equipo' => '64 ~ 90 g/m 2',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '5',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Capacidad de carga de papel',
            'Especificacion_Equipo' => '100 hojas de papel normal, 20 hojas de papel Premium Glossy Photo Paper',
        ]);

        /*PROYECTOR */
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '6',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Resolución',
            'Especificacion_Equipo' => 'Nativa Wuxga 1920 X 1200',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '6',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Tipo',
            'Especificacion_Equipo' => '(Según necesidad)',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '6',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Brillo (Lúmenes)',
            'Especificacion_Equipo' => '3600 o superior',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '6',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Conectividad',
            'Especificacion_Equipo' => 'USB',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '6',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Relación de aspecto',
            'Especificacion_Equipo' => '4: 3 (nativo), 16: 9 y auto compatible',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '6',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Puerto HDMI',
            'Especificacion_Equipo' => 'Si',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '6',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Puerto VGA',
            'Especificacion_Equipo' => 'Si',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '6',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Entrada RJ45',
            'Especificacion_Equipo' => 'Si',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '6',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Entrada RJ45',
            'Especificacion_Equipo' => 'Si',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '6',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Vida útil de la lámpara',
            'Especificacion_Equipo' => 'Mínimo 10000 hrs.',
        ]);
        /* PANTALLA INTERACTIVA*/
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '7',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Tamaño diagonal',
            'Especificacion_Equipo' => '65"- 80”',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '7',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Tipo',
            'Especificacion_Equipo' => 'Touch Tactil',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '7',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Ángulo de vista',
            'Especificacion_Equipo' => '180°',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '7',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Resolución',
            'Especificacion_Equipo' => '3,840 x 2,160',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '7',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Ratio de contraste',
            'Especificacion_Equipo' => '6,000:1',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '7',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Resolución',
            'Especificacion_Equipo' => '3840 x 2160',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '7',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Relación de contraste ',
            'Especificacion_Equipo' => '1.1000:1',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '7',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Entrada HDMI/VGA',
            'Especificacion_Equipo' => '2',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '7',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'USB',
            'Especificacion_Equipo' => '3',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '7',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Salida de Audio ',
            'Especificacion_Equipo' => 'Stereo Mini Jack',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '7',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Salida de Video',
            'Especificacion_Equipo' => 'si',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '7',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Entrada RS23si',
            'Especificacion_Equipo' => 'si',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '7',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Entrada RJ45',
            'Especificacion_Equipo' => 'si',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '7',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'WiFi',
            'Especificacion_Equipo' => 'si',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '7',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Bluetooth',
            'Especificacion_Equipo' => 'si',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '8',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Capacidad almacenamiento',
            'Especificacion_Equipo' => '(Según necesidad) 1tb – 2tb',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '8',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Tipo',
            'Especificacion_Equipo' => 'HDD',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '8',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Interface de conexión',
            'Especificacion_Equipo' => 'USB 2.0 / USB 3.0',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '8',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Fuente de alimentación',
            'Especificacion_Equipo' => 'USB',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '8',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Plataforma de trabajo',
            'Especificacion_Equipo' => 'MAC OS WINDOWS',
        ]);
        /*TABLET*/
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '9',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Pantalla',
            'Especificacion_Equipo' => 'Desde 7” a 12”',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '9',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Procesador',
            'Especificacion_Equipo' => 'Octacore Velocidad entre 1.4 Ghz y 2.8Ghz',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '9',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Memoria RAM',
            'Especificacion_Equipo' => 'Desde 2gb a 4gb (Según necesidad)',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '9',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Memoria interna',
            'Especificacion_Equipo' => 'Desde 32gb a 128gb (Según necesidad)',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '9',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Bluetooth',
            'Especificacion_Equipo' => 'Si',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '9',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Cámara principal',
            'Especificacion_Equipo' => 'Desde 8MP a 16MP (Según necesidad)',
        ]);
        $especificacions = Especificacion_Equipo::create([
            'ID_Tipo_Equipo' => '9',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion_Equipo' => 'Cámara frontal',
            'Especificacion_Equipo' => 'Desde 2MP a 5MP (Según necesidad)',
        ]);
    }
}
