<?php

namespace Database\Seeders;

use App\Models\Especificacion;
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
        $especificacions = Especificacion::create([
            'ID_Uso_Equipo' => '1',
            'Ord_Procesador' => 'Intel Core i5 - 10va generación',
            'Ord_MemoriaRam' => '8 GB DDR4',
            'Ord_DiscDuro' => '512 GB SSD',
            'Ord_TVideo' => 'Integrada',
            'Ord_SistemaOp' => 'Windows 10 Pro',
            'Ord_VelocidadProc' => '2.5 Ghz',
            'Ord_TamañoPantalla' => '14" - 15.6" FHD',
            'Ord_CamaraWebMicrofono' => 'Si - HD a 720p',
            'Ord_LectorTMemoria' => '1',
            'Ord_PuertoRJ45' => '1',
            'Ord_PuertoHDMI' => '1',
            'Ord_PuertoUSB' => '1',
            'Ord_Wifi' => '1',
            'Ord_ConectBluetooth' => '1',
            'Ord_PuertoTipoC' => '1',
            'Ord_SuiteInformatica' => '0',
        ]);

        $especificacions = Especificacion::create([
            'ID_Uso_Equipo' => '2',
            'Ord_Procesador' => 'Intel Core i7 - 10va generación',
            'Ord_MemoriaRam' => '8 GB DDR4',
            'Ord_DiscDuro' => '512 GB SSD',
            'Ord_TVideo' => 'Integrada',
            'Ord_SistemaOp' => 'Windows 10 Pro',
            'Ord_VelocidadProc' => '2.5 Ghz',
            'Ord_TamañoPantalla' => '14" - 15.6" FHD',
            'Ord_CamaraWebMicrofono' => 'Si - HD a 720p',
            'Ord_LectorTMemoria' => '1',
            'Ord_PuertoRJ45' => '1',
            'Ord_PuertoHDMI' => '1',
            'Ord_PuertoUSB' => '1',
            'Ord_Wifi' => '1',
            'Ord_ConectBluetooth' => '1',
            'Ord_PuertoTipoC' => '1',
            'Ord_SuiteInformatica' => '0',
        ]);

        $especificacions = Especificacion::create([
            'ID_Uso_Equipo' => '3',
            'Ord_Procesador' => 'Intel Core i7 - 10va generación',
            'Ord_MemoriaRam' => '16 GB DDR4',
            'Ord_DiscDuro' => '512 GB SSD',
            'Ord_TVideo' => 'Dedicado 2 GB',
            'Ord_SistemaOp' => 'Windows 10 Pro',
            'Ord_VelocidadProc' => '2.5 Ghz',
            'Ord_TamañoPantalla' => '15.6" FHD',
            'Ord_CamaraWebMicrofono' => 'Si - HD a 720p',
            'Ord_LectorTMemoria' => '1',
            'Ord_PuertoRJ45' => '1',
            'Ord_PuertoHDMI' => '1',
            'Ord_PuertoUSB' => '1',
            'Ord_Wifi' => '1',
            'Ord_ConectBluetooth' => '1',
            'Ord_PuertoTipoC' => '1',
            'Ord_SuiteInformatica' => '0',
        ]);

        // cpu
        $especificacions = Especificacion::create([
            'ID_Uso_Equipo' => '1',
            'Ord_Procesador' => 'Intel Core i5 - 10va generación',
            'Ord_MemoriaRam' => '8 GB DDR4',
            'Ord_DiscDuro' => '512 GB SSD',
            'Ord_TVideo' => 'Integrada',
            'Ord_SistemaOp' => 'Windows 10 Pro',
            'Ord_VelocidadProc' => '2.5 Ghz',
            'Ord_LectorTMemoria' => '1',
            'Ord_PuertoRJ45' => '1',
            'Ord_PuertoUSB' => '1',
            'Ord_Wifi' => '1',
            'Ord_SuiteInformatica' => '0',
            'Ord_PuertoHDMIyVGA_PuertoHDMIyDP' => '1',
            'Ord_ConectBluetoothOpc' => 'Opcional',
            'Ord_TecladoMouse' => '1',
        ]);

        $especificacions = Especificacion::create([
            'ID_Uso_Equipo' => '2',
            'Ord_Procesador' => 'Intel Core i7 - 10va generación',
            'Ord_MemoriaRam' => '8 GB DDR4',
            'Ord_DiscDuro' => '512 GB SSD',
            'Ord_TVideo' => 'Integrada',
            'Ord_SistemaOp' => 'Windows 10 Pro',
            'Ord_VelocidadProc' => '2.5 Ghz',
            'Ord_LectorTMemoria' => '1',
            'Ord_PuertoRJ45' => '1',
            'Ord_PuertoUSB' => '1',
            'Ord_Wifi' => '1',
            'Ord_SuiteInformatica' => '0',
            'Ord_PuertoHDMIyVGA_PuertoHDMIyDP' => '1',
            'Ord_ConectBluetoothOpc' => 'Opcional',
            'Ord_TecladoMouse' => '1',
        ]);

        $especificacions = Especificacion::create([
            'ID_Uso_Equipo' => '3',
            'Ord_Procesador' => 'Intel Core i7 - 10va generación',
            'Ord_MemoriaRam' => '16 GB DDR4',
            'Ord_DiscDuro' => '512 GB SSD',
            'Ord_TVideo' => 'Dedicado 2 GB',
            'Ord_SistemaOp' => 'Windows 10 Pro',
            'Ord_VelocidadProc' => '2.5 Ghz',
            'Ord_LectorTMemoria' => '1',
            'Ord_PuertoRJ45' => '1',
            'Ord_PuertoHDMI' => '1',
            'Ord_PuertoUSB' => '1',
            'Ord_Wifi' => '1',
            'Ord_SuiteInformatica' => '0',
            'Ord_ConectBluetoothOpc' => 'Opcional',
            'Ord_TecladoMouse' => '1',
        ]);

        //Monitor
        $especificacions = Especificacion::create([
            'ID_Uso_Equipo' => '4',
            'Mon_TamañoPantalla' => '23"-25"',
            'Mon_CamaraWebPantalla' => 'Integrado',
            'Mon_MicrofonoPantalla' => 'Integrado',
            'Mon_TipoPantalla' => 'Led',
            'Mon_ResolucionPantalla' => 'Full HD 1920x1080',
            'Mon_PuertoHDMI' => '1',
            'Mon_PuertoVGA' => 'Opcional',
            'Mon_DisplayPort' => 'Opcional',
	    ]);

        //Impresora byn
        $especificacions = Especificacion::create([
            'ID_Uso_Equipo' => '4',
            'ImpBn_Funciones' => 'Impresión, copia, escaneado, fax',
            'ImpBn_VelocidadImpresion' => '22 – 32ppm',
            'ImpBn_ImpBnTecnologiaImpresion' => 'Laser',
            'ImpBn_CalidadImpresion' => '>=1200x1200 ppp',
            'ImpBn_LenguajeImpresion' => 'PCL 6, PCL 5, emulación de postscript nivel 3',
            'ImpBn_DoblecaraImpre' => 'Automática (estándar)',
            'ImpBn_Conectividad' => '1 dispositivos USB  2,0 de alta velocidad; 1 host USB 2.0 de alta velocidad; 1 Gigabit Ethernet 10/100/1000 Base-TX',
            'ImpBn_MemoriaStandard' => '256 MB',
            'ImpBn_TamaniosSoporte' => 'Bandeja 1:A4, A5, A6, RA4, B5 8JIS, 10x15cm, Tarjeta postal (JIS), Dpostcard (JIS), Sobre (B5, C5, C6, DL); Bandeja 2, bandeja 3 opcional: A4, A5, A6, RA4, B5 (JIS), B6 (JIS), 10x15 cm Tarjeta postal (JIS), Dpostcard (JIS)',
            'ImpBn_TipoEscaner' => 'Cama plana, alimentador automático de documentos (ADF)',
        ]);

        //IMPRESORA A COLOR
        $especificacions = Especificacion::create([
            'ID_Uso_Equipo' => '4',
            'ImpColor_TecnologiaImpresion' => 'Sistema Continuo',
            'ImpColor_InyeccionTinta' => '4 Colores (CMYK)',
            'ImpColor_ResolucionMaxImpresion' => '5.760x1440 dpi de resolución optmizada en varios tipos de panel',
            'ImpColor_Velocidad_Impresion' => 'MAXIMA: Negro (33ppm) y Color (15ppm) NORMAL: Negro (10.5 ISO ppm) y Color (5 ISO ppm)',
            'ImpColor_Copias' => 'Resolución maxima de copiado: 360x360 dpi, Cantidad: 1-20 copias(sin PC), Tamaño; A4 y carta',
            'ImpColor_Escaneo' => 'Tipo de digitalizador: Cama plana con sensor de lineas CIS de color, Área de digitalización máxima: 21.6 x 29.7cm (8.5" x 11.7"), Resolucion Óptica: 600dpi, Hardware: 600x1200 dpi, Interpolada: 9.600x9.600 dpi',
            'ImpColor_ConectividadTipo' => 'USB con ADF mínimo 30 hojas',
            'ImpColor_SoportePapelSinPC' => '89 x 127mm, carta/216 x 279 mm, A4/210 x 297 mm, legal/216 x 356 mm/Peso de papel soportado 64~90 g/m 2',
            'ImpColor_CapacidadCargaPapel' => '100 hojas de papel normal, 20 hojas de papel Premium Glossy Photo Paper'
            ]);

        //PROYECTOR
        $especificacions = Especificacion::create([
            'ID_Uso_Equipo' => '4',
            'Proyec_Resolucion' => 'Nativa Wuxga 1920 X 1200',
            'Proyec_Tipo' => '(Según necesidad)',
            'Proyec_Brillo' => '3600 o superior',
            'Proyec_Conectividad' => 'USB',
            'Proyec_RelacionAspecto' => '4:3 (nativo), 16:9 y auto compatible',
            'Proyec_PuertoHDMI' => 'Si',
            'Proyec_PuertoVGA' => 'Si',
            'Proyec_EntradaRj45' => 'Si',
            'Proyec_VidaUtilLampara' => 'Minimo 10000 hrs.'
        ]);

        //Pantalla interactiva
        $especificacions = Especificacion::create([
            'ID_Uso_Equipo' => '4',
            'PantInter_TamañoDiagonal' => '65"-80"',
            'PantInter_Tipo' => 'Touch Tactil',
            'PantInter_AnguloVista' => '180°',
            'PantInter_Resolucion' => '3840 x 2160',
            'PantInter_RatioContraste' => '6000;1',
            'PantInter_RelacionContraste' => '1:1000:1',
            'PantInter_EntradaHDMI_VGA' => '2',
            'PantInter_EntradaUSB' => '3',
            'PantInter_SalidaAudio' => 'Stereo Mini Jack',  //XXX Cambiar a string
            'PantInter_SalidaVideo' => '1',
            'PantInter_EntradaRS232' => '1',
            'PantInter_EntradaRJ45' => '1',
            'PantInter_Wifi' => '1',
            'PantInter_Bluetooth' => '1',
        ]);

        //Disco duro
        $especificacions = Especificacion::create([
            'ID_Uso_Equipo' => '4',
            'DiscDuro_CapacidadAlmacenamiento' => '1tb-2tb',
            'DiscDuro_Tipo' => 'HDD',
            'DiscDuro_InterfaceConexion' => 'USB 2.0/USB 3.0',
            'DiscDuro_FuenteAlimentacion' => 'USB',
            'DiscDuro_PlataformaTrabajo' => 'MAC OS WINDOWS',
        ]);

        //Tablet
        $especificacions = Especificacion::create([
            'ID_Uso_Equipo' => '4',
            'Tablet_Pantalla' => '7" - 12"',
            'Tablet_Procesador' => 'Octacore Velocidad entre 1.4 Ghz y 2.8Ghz',
            'Tablet_MemoriaRAM' => '2gb a 4gb',
            'Tablet_MemoriaInterna' => '32gb a 128gb',
            'Tablet_Bluetooth' => '1',
            'Tablet_CamaraPrincipal' => '8MP a 16MP',
            'Tablet_CamaraFrontal' => '2MP a 5MP',
        ]);
   

        //Otros registros

        //Monitor
        $especificacions = Especificacion::create([
            'ID_Uso_Equipo' => '4',
            'Mon_TamañoPantalla' => '23" - 25"',
            'Mon_CamaraWebPantalla' => 'No Integrado',
            'Mon_MicrofonoPantalla' => 'No Integrado',
            'Mon_TipoPantalla' => 'LCD',
            'Mon_ResolucionPantalla' => 'Full HD 1920x1080',
            'Mon_PuertoHDMI' => '1',
            'Mon_PuertoVGA' => 'Opcional',
            'Mon_DisplayPort' => 'Opcional',
        ]);
        
        $especificacions = Especificacion::create([
            'ID_Uso_Equipo' => '4',
            'Mon_TamañoPantalla' => '23"-25"',
            'Mon_CamaraWebPantalla' => 'Integrado',
            'Mon_MicrofonoPantalla' => 'Integrado',
            'Mon_TipoPantalla' => 'Curvo',
            'Mon_ResolucionPantalla' => 'Full HD 1920x1080',
            'Mon_PuertoHDMI' => '1',
            'Mon_PuertoVGA' => 'Opcional',
            'Mon_DisplayPort' => 'Opcional',
        ]);

        // Impresora byn
        $especificacions = Especificacion::create([
            'ID_Uso_Equipo' => '4',
            'ImpBn_Funciones' => 'Impresión, copia, escaneado, fax',
            'ImpBn_VelocidadImpresion' => '22 – 32ppm',
            'ImpBn_ImpBnTecnologiaImpresion' => 'Laser',
            'ImpBn_CalidadImpresion' => '>=1200x1200 ppp',
            'ImpBn_LenguajeImpresion' => 'PCL 6, PCL 5, emulación de postscript nivel 3',
            'ImpBn_DoblecaraImpre' => 'Automática (estándar)',
            'ImpBn_Conectividad' => '1 dispositivos USB  2,0 de alta velocidad; 1 host USB 2.0 de alta velocidad; 1 Gigabit Ethernet 10/100/1000 Base-TX',
            'ImpBn_MemoriaStandard' => '512 MB',
            'ImpBn_TamaniosSoporte' => 'Bandeja 1:A4, A5, A6, RA4, B5 8JIS, 10x15cm, Tarjeta postal (JIS), Dpostcard (JIS), Sobre (B5, C5, C6, DL); Bandeja 2, bandeja 3 opcional: A4, A5, A6, RA4, B5 (JIS), B6 (JIS), 10x15 cm Tarjeta postal (JIS), Dpostcard (JIS)',
            'ImpBn_TipoEscaner' => 'Cama plana, alimentador automático de documentos (ADF)',
        ]);

        $especificacions = Especificacion::create([
            'ID_Uso_Equipo' => '4',
            'ImpBn_Funciones' => 'Impresión, copia, escaneado, fax',
            'ImpBn_VelocidadImpresion' => '22 – 32ppm',
            'ImpBn_ImpBnTecnologiaImpresion' => 'Toner',
            'ImpBn_CalidadImpresion' => '>=1200x1200 ppp',
            'ImpBn_LenguajeImpresion' => 'PCL 6, PCL 5, emulación de postscript nivel 3',
            'ImpBn_DoblecaraImpre' => 'Automática (estándar)',
            'ImpBn_Conectividad' => '1 dispositivos USB  2,0 de alta velocidad; 1 host USB 2.0 de alta velocidad; 1 Gigabit Ethernet 10/100/1000 Base-TX',
            'ImpBn_MemoriaStandard' => '1 TB',
            'ImpBn_TamaniosSoporte' => 'Bandeja 1:A4, A5, A6, RA4, B5 8JIS, 10x15cm, Tarjeta postal (JIS), Dpostcard (JIS), Sobre (B5, C5, C6, DL); Bandeja 2, bandeja 3 opcional: A4, A5, A6, RA4, B5 (JIS), B6 (JIS), 10x15 cm Tarjeta postal (JIS), Dpostcard (JIS)',
            'ImpBn_TipoEscaner' => 'Cama plana, alimentador automático de documentos (ADF)',
        ]);

        //Impresora color
        $especificacions = Especificacion::create([
            'ID_Uso_Equipo' => '4',
            'ImpColor_TecnologiaImpresion' => 'Chorro de Tinta',
            'ImpColor_InyeccionTinta' => 'De color (CMY), Tintes de color negro(kd), Pigmentos negros(kp)',
            'ImpColor_ResolucionMaxImpresion' => '4800 x 1200 dpi, 2400 x 1200 dpi, 600 x 600 dpi',
            'ImpColor_Velocidad_Impresion' => 'Tinta negra: 51ppm - Negra y de color 28ppm / 10" po segundo velocidad de alimentación',
            'ImpColor_Copias' => 'Resolución máxima de copiado 360 x 360 dpi Cantidad 1-20 copias (sin PC) Tamaño A4, carta',
            'ImpColor_Escaneo' => 'Resolución maxima de copiado: 360x360 dpi, Cantidad: 1-20 copias(sin PC), Tamaño; A4 y carta',
            'ImpColor_ConectividadTipo' => 'Cable USB 2.0; Puerto de Control Externo',
            'ImpColor_SoportePapelSinPC' => '432 mmA x 231 mmAl x 394 mmL',
            'ImpColor_CapacidadCargaPapel' => '152 mm, con un máximo diámetro de 3" (76 mm) en el centro.'
        ]);

        //Proyector
        $especificacions = Especificacion::create([
            'ID_Uso_Equipo' => '4',
            'Proyec_Resolucion' => 'PowerLite S17:800 × 600 píxeles (SVGA)',
            'Proyec_Tipo' => '(Según necesidad)',
            'Proyec_Brillo' => 'PowerLite S17/X17:Emisión de luz blanca de 2700 lúmenes (estándar ISO 21118)',
            'Proyec_Conectividad' => '	Un puerto compatible con USB 1.1 y 2.0 para proyecciones de entrada de un dispositivo USB, una cámara de documentos Epson o un módulo LAN inalámbrico opcional',
            'Proyec_RelacionAspecto' => 'Nativo PowerLite S17:23 a 350 pulg. (0,58 a 8,89 m)',
            'Proyec_PuertoHDMI' => 'Si',
            'Proyec_PuertoVGA' => 'No',
            'Proyec_EntradaRj45' => 'Si',
            'Proyec_VidaUtilLampara' => 'Minimo 10000 hrs.'
        ]);

        $especificacions = Especificacion::create([
            'ID_Uso_Equipo' => '4',
            'Proyec_Resolucion' => 'PowerLite W17:1280 × 800 píxeles (WXGA)',
            'Proyec_Tipo' => '(Según necesidad)',
            'Proyec_Brillo' => 'PowerLite X21:Modo Consumo eléctrico Normal:Emisión de luz blanca de 3000 lúmenes (estándar ISO 21118)',
            'Proyec_Conectividad' => 'Un puerto compatible con USB 1.1 y 2.0 para pantalla USB o mouse externo',
            'Proyec_RelacionAspecto' => 'PowerLite W17: 35 a 425 pulg. (0,9 a 10,8 m)',
            'Proyec_PuertoHDMI' => 'Si',
            'Proyec_PuertoVGA' => 'Si',
            'Proyec_EntradaRj45' => 'Si',
            'Proyec_VidaUtilLampara' => 'Minimo 10000 hrs.'
        ]);

        //tablet
        $especificacions = Especificacion::create([
            'ID_Uso_Equipo' => '4',
            'Tablet_Pantalla' => '7" - 12"',
            'Tablet_Procesador' => 'Octacore Velocidad 1.4Ghz y 2.8Ghz',
            'Tablet_MemoriaRAM' => '6 GB',
            'Tablet_MemoriaInterna' => '32gb a 128gb',
            'Tablet_Bluetooth' => '1',
            'Tablet_CamaraPrincipal' => '8MP a 16MP',
            'Tablet_CamaraFrontal' => '2MP a 5MP',
        ]);
    }
}
