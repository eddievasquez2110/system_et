<?php

namespace Database\Seeders;

use App\Models\Version;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class VersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ver = Version::create([
            'Nombre_Version'=> '16.0',
            'Anio_Version' => '2016',
        ]);
	
	    $ver = Version::create([
            'Nombre_Version'=> '16.0',
            'Anio_Version' => '2019',
        ]);

	    $ver = Version::create([
            'Nombre_Version'=> '16.0',
            'Anio_Version' => '2021',
        ]);

        //Ejemplo autocad
        $ver = Version::create([
            'Nombre_Version'=> '19.0',
            'Anio_Version' => '2012',
        ]);

        $ver = Version::create([
            'Nombre_Version'=> '19.1',
            'Anio_Version' => '2013',
        ]);
	    $ver = Version::create([
            'Nombre_Version'=> '20.0',
            'Anio_Version' => '2014',
        ]);
	    $ver = Version::create([
            'Nombre_Version'=> '20.1',
            'Anio_Version' => '2015',
        ]);
               //Ejemplo adobe reader
        $ver = Version::create([
            'Nombre_Version'=> '2021',
            'Anio_Version' => '2022',
        ]);

        $ver = Version::create([
            'Nombre_Version'=> '2018',
            'Anio_Version' => '2018',
        ]);
	    $ver = Version::create([
            'Nombre_Version'=> '11',
            'Anio_Version' => '2012',
        ]);
	    $ver = Version::create([
            'Nombre_Version'=> '10.1',
            'Anio_Version' => '2011',
        ]);
	    $ver = Version::create([
            'Nombre_Version'=> '10.0',
            'Anio_Version' => '2010',
        ]);
    }
}
