<?php

namespace App\Http\Controllers;

use App\Models\Especificacion_Equipo;
use App\Models\Tipo_Equipo;
use App\Models\Uso_Equipo;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminEspecificacionEquipoController extends Controller
{
    public function index()
    {
        //$EspEquipoList = Especificacion_Equipo::with('Tipo_Equipo:Nombre_Tipo_Equipo')->where('ID_Tipo_Equipo','=','ID_Especificacion_Equipo')->paginate(6);
        $EspEquipoList = Especificacion_Equipo::orderBy('ID_Especificacion_Equipo')->paginate(6);
        //$TipoList = Tipo_Equipo::orderBy('ID_Tipo_Equipo');
        return Inertia::render('Admin/Equipos/EspecificacionEquipo',[
            'espEquipos' => $EspEquipoList,
            //'tipoEquipos' => $TipoList
        ]);
    }
}
