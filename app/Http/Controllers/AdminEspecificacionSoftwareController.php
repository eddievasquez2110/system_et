<?php

namespace App\Http\Controllers;

use App\Models\Especificacion_Software;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminEspecificacionSoftwareController extends Controller
{
    public function index()
    {
        $espSoftwares = Especificacion_Software::with('software','uso__equipos')
        ->join('software','especificacion__software.ID_Software','=','software.ID_Software')
        ->join('uso__equipos','especificacion__software.ID_Uso_Equipo','=','uso__equipos.ID_Uso_Equipo')->paginate(6);

        return Inertia::render('Admin/Software/EspecificacionSoftware',[
            'espSoftwares' => $espSoftwares,
            //'tipoEquipos' => $TipoList
        ]);
    }
}
