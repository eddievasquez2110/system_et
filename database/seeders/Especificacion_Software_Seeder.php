<?php

namespace Database\Seeders;

use App\Models\Especificacion_Software;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Especificacion_Software_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $especicacion_s = new Especificacion_Software();

        $especicacion_s->Procesador = "1,6 GHz (o superior) (32 bits o 64 bits) 2 núcleos";
        $especicacion_s->SistemaOperativo = "Windows";
        $especicacion_s->TamañoAlmacenamiento = "3.0 GB de espacio en disco disponible";
        $especicacion_s->MemoriaRAM="4,0 GBs de RAM";
        $especicacion_s->TarjetaVideo="AMD Radeon™ serie RX 7900";
        
        $especicacion_s->save();
    }
}
