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
            'Nombre_Version'=> '2013',
            'Anio_Version' => '2014',
        ]);
	
	    $ver = Version::create([
            'Nombre_Version'=> '2016',
            'Anio_Version' => '2017',
        ]);

	    $ver = Version::create([
            'Nombre_Version'=> '2013',
            'Anio_Version' => '2014',
        ]);

        //Ejemplo r-studio
        $ver = Version::create([
            'Nombre_Version'=> '9.1',
            'Anio_Version' => '2022',
        ]);

        $ver = Version::create([
            'Nombre_Version'=> '8',
            'Anio_Version' => '2020',
        ]);
	   $ver = Version::create([
            'Nombre_Version'=> '4',
            'Anio_Version' => '2009',
        ]);
    }
}
