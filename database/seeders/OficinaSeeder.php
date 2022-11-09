<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OficinaSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('oficinas')->insert([
            'Nombre_Oficina' => 'Logistica',
            'Cargo_Oficina' => 'Jefe',
            'created_at' => Carbon::now(),
        ]);

        DB::table('oficinas')->insert([
            'Nombre_Oficina' => 'RR_HH',
            'Cargo_Oficina' => 'Jefe',
            'created_at' => Carbon::now(),
        ]);

        DB::table('oficinas')->insert([
            'Nombre_Oficina' => 'Contabilidad',
            'Cargo_Oficina' => 'Jefe',
            'created_at' => Carbon::now(),
        ]);

        DB::table('oficinas')->insert([
            'Nombre_Oficina' => 'Vicerrectorado',
            'Cargo_Oficina' => 'Jefe',
            'created_at' => Carbon::now(),
        ]);

        DB::table('oficinas')->insert([
            'Nombre_Oficina' => 'Rectorado',
            'Cargo_Oficina' => 'Jefe',
            'created_at' => Carbon::now(),
        ]);
    }
}
