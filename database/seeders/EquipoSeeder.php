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
            	'ID_Tipo_Equipo'=> '2',
                'ID_Especificacion'=> '4',
                'Nombre_Equipo'=> 'CPU',
        ]);
        $equi = Equipo::create([
            	'ID_Tipo_Equipo'=> '2',
                'ID_Especificacion'=> '5',
                'Nombre_Equipo'=> 'CPU',
        ]);
	$equi = Equipo::create([
            	'ID_Tipo_Equipo'=> '2',
                'ID_Especificacion'=> '6',
                'Nombre_Equipo'=> 'CPU',
        ]);
	$equi = Equipo::create([
            	'ID_Tipo_Equipo'=> '3',
                'ID_Especificacion'=> '7',
                'Nombre_Equipo'=> 'Monitor',
        ]);
	$equi = Equipo::create([
            	'ID_Tipo_Equipo'=> '4',
                'ID_Especificacion'=> '8',
                'Nombre_Equipo'=> 'Impresora toner blanco y  negro',
        ]);
	$equi = Equipo::create([
            	'ID_Tipo_Equipo'=> '5',
                'ID_Especificacion'=> '9',
                'Nombre_Equipo'=> 'Impresora tinta colores',
        ]);
	$equi = Equipo::create([
            	'ID_Tipo_Equipo'=> '6',
                'ID_Especificacion'=> '10',
                'Nombre_Equipo'=> 'Proyector',
        ]);
	$equi = Equipo::create([
            	'ID_Tipo_Equipo'=> '7',
                'ID_Especificacion'=> '11',
                'Nombre_Equipo'=> 'Pantalla interactiva',
        ]);
	$equi = Equipo::create([
            	'ID_Tipo_Equipo'=> '8',
                'ID_Especificacion'=> '12',
                'Nombre_Equipo'=> 'Disco duro externo',
        ]);
	$equi = Equipo::create([
            	'ID_Tipo_Equipo'=> '9',
                'ID_Especificacion'=> '13',
                'Nombre_Equipo'=> 'Tablet',
        ]);
    }
}
