<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Oficina;


class OficinaSeeder extends Seeder
{
    
    public function run()
    {

        $ofi = Oficina::create([
            'Nombre_Oficina' => 'Logistica',
            'Cargo_Oficina' => 'Jefe',
        ]);

        $ofi = Oficina::create([
            'Nombre_Oficina' => 'RR_HH',
            'Cargo_Oficina' => 'Jefe',
        ]);

        $ofi = Oficina::create([
            'Nombre_Oficina' => 'Contabilidad',
            'Cargo_Oficina' => 'Jefe',
        ]);

        $ofi = Oficina::create([
            'Nombre_Oficina' => 'Vicerrectorado',
            'Cargo_Oficina' => 'Jefe',
        ]);

        $ofi = Oficina::create([
            'Nombre_Oficina' => 'Rectorado',
            'Cargo_Oficina' => 'Jefe',
        ]);
    }
}
