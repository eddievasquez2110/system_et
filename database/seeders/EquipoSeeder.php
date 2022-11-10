<?php

namespace Database\Seeders;

use App\Models\Equipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $equi = Equipo::create([
            'ID_Tipo_Equipo'=> '1',
                'ID_Especificacion'=> '1',
                'Nombre_Equipo'=> 'Laptop',
        ]);
        $equi = Equipo::create([
            'ID_Tipo_Equipo'=> '1',
                'ID_Especificacion'=> '2',
                'Nombre_Equipo'=> 'Laptop',
        ]);
        $equi = Equipo::create([
            'ID_Tipo_Equipo'=> '1',
                'ID_Especificacion'=> '3',
                'Nombre_Equipo'=> 'Laptop',
        ]);
        
        $equi = Equipo::create([
            'ID_Tipo_Equipo'=> '1',
                'ID_Especificacion'=> '3',
                'Nombre_Equipo'=> 'Laptop',
        ]);
           
        $equi = Equipo::create([
            'ID_Tipo_Equipo'=> '2',
                'ID_Especificacion'=> '4',
                'Nombre_Equipo'=> 'CPU',
        ]);
        $equi = Equipo::create([
            'ID_Tipo_Equipo'=> '2',
                'ID_Especificacion'=> '5',
                'Nombre_Equipo'=> 'CPU',
        ]);
    }
}
