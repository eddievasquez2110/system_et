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
        
        $espEquipos = Especificacion_Equipo::with('tipo__equipos','uso__equipos')
        ->join('tipo__equipos','especificacion__equipos.ID_Tipo_Equipo','=','tipo__equipos.ID_Tipo_Equipo')
        ->join('uso__equipos','especificacion__equipos.ID_Uso_Equipo','=','uso__equipos.ID_Uso_Equipo')->paginate(6);
        
        return Inertia::render('Admin/Equipos/EspecificacionEquipo',[
            'espEquipos' => $espEquipos,
        ]);
    }































    public function destroy($id)
    {
        Especificacion_Equipo::where('ID_Especificacion_Equipo',$id)->delete();
        return redirect()->route('d.especificacionequipo.index');
    }

}
