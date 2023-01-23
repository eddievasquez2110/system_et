<?php

namespace App\Http\Controllers;

use App\Models\Especificacion_Equipo;
use App\Models\Tipo_Equipo;
use Inertia\Inertia;
use Illuminate\Http\Request;

class EspecificacionEquipoController extends Controller
{
    public function show($id)
    {
        return Inertia::render('Admin/Solicitud/Especificacion',[
            'laptops' =>Tipo_Equipo::where('ID_Tipo_Equipo',$id)->get(),
            'especificacion' =>Especificacion_Equipo::where('ID_Tipo_Equipo',$id)->get()
        ]);
    }

}
