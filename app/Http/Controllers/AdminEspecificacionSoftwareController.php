<?php

namespace App\Http\Controllers;

use App\Models\Especificacion_Software;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminEspecificacionSoftwareController extends Controller
{
    public function index()
    {
        //$EspEquipoList = Especificacion_Equipo::with('tipo__equipos:Nombre_Tipo_Equipo')->where('ID_Tipo_Equipo','=','ID_Especificacion_Equipo')->paginate(6);
        $espSoftwares = Especificacion_Software::orderBy('ID_Especificacion_Software')->paginate(6);
        //$TipoList = Tipo_Equipo::orderBy('ID_Tipo_Equipo');
        return Inertia::render('Admin/Software/EspecificacionSoftware',[
            'espSoftwares' => $espSoftwares,
            //'tipoEquipos' => $TipoList
        ]);
    }
}
