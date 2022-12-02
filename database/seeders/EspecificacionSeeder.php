<?php

namespace Database\Seeders;

use App\Models\Especificacion_Equipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EspecificacionSeeder extends Seeder
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
            'Nombre_Especificacion' => 'Procesador',
            'Especificacion' => 'Intel Core i5 , 10va generación o superior',
        ]);

        /* $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Memoria RAM',
            'Especificacion' => '08 GB DDR4',
        ]);

        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Disco Duro (Almacenamiento)',
            'Especificacion' => '512 GB SSD',
        ]);

        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Tarjeta de video',
            'Especificacion' => 'integrada',
        ]);

        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Sistema operativo',
            'Especificacion' => 'Windows 10 Pro',
        ]);

        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Velocidad del procesador',
            'Especificacion' => '2.5 Ghz como mínimo',
        ]);

        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Tamaño de pantalla',
            'Especificacion' => 'Elegir entre 14” o 15.6” FHD',
        ]);

        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Cámara Web / micrófono',
            'Especificacion' => 'Sí - HD a 720p',
        ]);

        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Lector de tarjeta de memoria',
            'Especificacion' => 'Si',
        ]);

        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Puerto RJ45',
            'Especificacion' => 'Si',
        ]);

        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Puertos HDMI',
            'Especificacion' => 'Si',
        ]);

        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Puertos USB',
            'Especificacion' => 'Si (2 mínimo)',
        ]);

        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Wi-Fi',
            'Especificacion' => 'Si',
        ]);

        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Conectividad Bluetooth',
            'Especificacion' => 'Si',
        ]);

        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Puerto Tipo C',
            'Especificacion' => 'Si',
        ]);

        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Suite de Ofimática',
            'Especificacion' => 'No',
        ]); */

        /* lapto CPU*/

        /* $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Procesador',
            'Especificacion' => 'Intel Core i5 – 10va generación o superior',
        ]);

        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Memoria RAM',
            'Especificacion' => '08 GB DDR4',
        ]);

        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Disco Duro (Almacenamiento)',
            'Especificacion' => '512 GB SSD',
        ]);

        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Tarjeta de video',
            'Especificacion' => 'integrada',
        ]);

        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Sistema operativo',
            'Especificacion' => 'Windows 10 Pro',
        ]);

        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Velocidad del procesador',
            'Especificacion' => '2.5 Ghz como mínimo',
        ]);

        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Tamaño de pantalla',
            'Especificacion' => 'Elegir entre 14” o 15.6” FHD',
        ]);

        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Cámara Web / micrófono',
            'Especificacion' => 'Sí - HD a 720p',
        ]);

        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Lector de tarjeta de memoria',
            'Especificacion' => 'Si',
        ]);

        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Puerto RJ45',
            'Especificacion' => 'Si',
        ]);

        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Puertos HDMI',
            'Especificacion' => 'Si',
        ]);

        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Puertos USB',
            'Especificacion' => 'Si (2 mínimo)',
        ]);

        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Wi-Fi',
            'Especificacion' => 'Si',
        ]);

        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '1',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Conectividad Bluetooth',
            'Especificacion' => 'Si',
        ]);

        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Puerto Tipo C',
            'Especificacion' => 'Si',
        ]);

        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '2',
            'ID_Uso_Equipo' => '1',
            'Nombre_Especificacion' => 'Suite de Ofimática',
            'Especificacion' => 'No',
        ]); */
        /* MONITOR */
        /* $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '3',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Tamaño',
            'Especificacion' => 'Entre 23” – 25”',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '3',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Cámara web ',
            'Especificacion' => 'Integrado(Previa evaluación)',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '3',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Micrófono',
            'Especificacion' => 'Integrado(Previa evaluación)',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '3',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'TIPO ',
            'Especificacion' => 'Led',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '3',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Resolución',
            'Especificacion' => 'Full HD 1920x1080',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '3',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'HDMI',
            'Especificacion' => 'Si',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '3',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'VGA',
            'Especificacion' => 'Opcional',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '3',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'DisplayPort',
            'Especificacion' => 'Opcional',
        ]); */
        /* IMPRESORA TONER BLANCO Y NEGRO*/
        /* $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '4',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Funciones ',
            'Especificacion' => 'Impresión, copia, escaneado, fax',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '4',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Velocidad de impresión',
            'Especificacion' => '22 – 32ppm',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '4',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Tecnología de Impresión',
            'Especificacion' => 'Laser',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '4',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Calidad de Impresión en Negro (Optima)',
            'Especificacion' => '>= 1200x1200 ppp',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '4',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Lenguaje de Impresión',
            'Especificacion' => 'PCL 6, PCL 5, emulación de postscript nivel 3',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '4',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Impresión a Doble Cara',
            'Especificacion' => 'Automática (estándar)',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '4',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Memoria, Estándar',
            'Especificacion' => '256 MB',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '4',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Memoria, Estándar',
            'Especificacion' => '256 MB',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '4',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Tamaños de Soportes de Impresión Admitidos',
            'Especificacion' => 'Bandeja 1:A4, A5, A6, RA4, B5 8JIS), 10x15cm, Tarjeta postal (JIS), Dpostcard (JIS), Sobre (B5, C5, C6, DL); Bandeja 2, bandeja 3 opcional: A4, A5, A6, RA4, B5 (JIS), B6 (JIS), 10x15 cm Tarjeta postal (JIS), Dpostcard (JIS)',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '4',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Tipo De Escáner - Escaneado ADF Dúplex',
            'Especificacion' => 'Cama plana, alimentador automático de documentos (ADF)',
        ]); */
        /* TINTA COLORES*/
        /* $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '5',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Tecnología de impresión',
            'Especificacion' => 'Sistema continuo',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '5',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Inyección de tinta',
            'Especificacion' => 'de 4 colores (CMYK)',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '5',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Resolución máxima de impresión',
            'Especificacion' => 'Hasta 5.760 x 1.440 dpi de resolución optimizada en varios tipos de papel',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '5',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Velocidad de impresión',
            'Especificacion' => 'Máxima Negro 33 ppm y color 15 ppm 
            Normal Negro 10.5 ISO ppm y color 5 ISO ppm
            ',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '5',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Copias',
            'Especificacion' => 'Resolución máxima de copiado 360 x 360 dpi Cantidad 1-20 copias (sin PC) Tamaño A4, carta',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '5',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Escaneo',
            'Especificacion' => 'Tipo de digitalizador Cama plana con sensor de líneas CIS de color,
            Área de digitalización máxima 21.6 x 29.7 cm (8.5" x 11.7"),
            Resolución Óptica 600 dpi,
            Hardware 600 x1200 dpi,
            Interpolada 9.600 x 9.600 dpi.
            ',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '5',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Escaneo',
            'Especificacion' => 'Tipo de digitalizador Cama plana con sensor de líneas CIS de color,
            Área de digitalización máxima 21.6 x 29.7 cm (8.5" x 11.7"),
            Resolución Óptica 600 dpi,
            Hardware 600 x1200 dpi,
            Interpolada 9.600 x 9.600 dpi.
            ',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '5',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Conectividad estándar y tipo',
            'Especificacion' => 'USB con ADF mínimo 30 hojas',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '5',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Soporte de papel sin PC',
            'Especificacion' => '89 x 127mm, carta/216 x 279 mm, A4/210 x 297 mm, legal/216 x 356 mm',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '5',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Soporte de papel sin PC',
            'Especificacion' => '89 x 127mm, carta/216 x 279 mm, A4/210 x 297 mm, legal/216 x 356 mm',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '5',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Peso de papel soportado',
            'Especificacion' => '64 ~ 90 g/m 2',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '5',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Capacidad de carga de papel',
            'Especificacion' => '100 hojas de papel normal, 20 hojas de papel Premium Glossy Photo Paper',
        ]); */

        /*PROYECTOR */
        /* $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '6',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Resolución',
            'Especificacion' => 'Nativa Wuxga 1920 X 1200',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '6',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Tipo',
            'Especificacion' => '(Según necesidad)',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '6',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Brillo (Lúmenes)',
            'Especificacion' => '3600 o superior',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '6',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Conectividad',
            'Especificacion' => 'USB',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '6',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Relación de aspecto',
            'Especificacion' => '4: 3 (nativo), 16: 9 y auto compatible',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '6',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Puerto HDMI',
            'Especificacion' => 'Si',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '6',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Puerto VGA',
            'Especificacion' => 'Si',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '6',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Entrada RJ45',
            'Especificacion' => 'Si',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '6',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Entrada RJ45',
            'Especificacion' => 'Si',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '6',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Vida útil de la lámpara',
            'Especificacion' => 'Mínimo 10000 hrs.',
        ]); */
        /* PANTALLA INTERACTIVA*/
        /* $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '7',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Tamaño diagonal',
            'Especificacion' => '65"- 80”',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '7',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Tipo',
            'Especificacion' => 'Touch Tactil',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '7',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Ángulo de vista',
            'Especificacion' => '180°',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '7',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Resolución',
            'Especificacion' => '3,840 x 2,160',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '7',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Ratio de contraste',
            'Especificacion' => '6,000:1',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '7',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Resolución',
            'Especificacion' => '3840 x 2160',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '7',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Relación de contraste ',
            'Especificacion' => '1.1000:1',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '7',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Entrada HDMI/VGA',
            'Especificacion' => '2',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '7',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'USB',
            'Especificacion' => '3',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '7',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Salida de Audio ',
            'Especificacion' => 'Stereo Mini Jack',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '7',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Salida de Video',
            'Especificacion' => 'si',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '7',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Entrada RS23si',
            'Especificacion' => 'si',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '7',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Entrada RJ45',
            'Especificacion' => 'si',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '7',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'WiFi',
            'Especificacion' => 'si',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '7',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Bluetooth',
            'Especificacion' => 'si',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '8',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Capacidad almacenamiento',
            'Especificacion' => '(Según necesidad) 1tb – 2tb',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '8',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Tipo',
            'Especificacion' => 'HDD',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '8',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Interface de conexión',
            'Especificacion' => 'USB 2.0 / USB 3.0',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '8',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Fuente de alimentación',
            'Especificacion' => 'USB',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '8',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Plataforma de trabajo',
            'Especificacion' => 'MAC OS WINDOWS',
        ]); */
        /*TABLET*/
       /*  $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '9',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Pantalla',
            'Especificacion' => 'Desde 7” a 12”',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '9',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Procesador',
            'Especificacion' => 'Octacore Velocidad entre 1.4 Ghz y 2.8Ghz',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '9',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Memoria RAM',
            'Especificacion' => 'Desde 2gb a 4gb (Según necesidad)',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '9',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Memoria interna',
            'Especificacion' => 'Desde 32gb a 128gb (Según necesidad)',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '9',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Bluetooth',
            'Especificacion' => 'Si',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '9',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Cámara principal',
            'Especificacion' => 'Desde 8MP a 16MP (Según necesidad)',
        ]);
        $especificacions = Especificacion::create([
            'ID_Tipo_Equipo' => '9',
            'ID_Uso_Equipo' => '4',
            'Nombre_Especificacion' => 'Cámara frontal',
            'Especificacion' => 'Desde 2MP a 5MP (Según necesidad)',
        ]); */
    }
}
