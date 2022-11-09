<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RolSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rols')->insert([
            'Nombre_Rol' => 'Super Administrador',
            'created_at' => Carbon::now(),
        ]);

        DB::table('rols')->insert([
            'Nombre_Rol' => 'Administrador',
            'created_at' => Carbon::now(),
        ]);

        DB::table('rols')->insert([
            'Nombre_Rol' => 'Usuario',
            'created_at' => Carbon::now(),
        ]);  
       
    }
}
