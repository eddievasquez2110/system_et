<?php

namespace App\Http\Controllers;

use App\Models\Solicitud_Detalle;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminSolicitudController extends Controller
{
    public function index()
    {
    $solis = Solicitud_Detalle::with('solicituds','especificacion__equipos','especificacion__software')
        ->join('solicituds','solicitud__detalles.ID_Solicitud','=','solicituds.ID_Solicitud')
        ->join('especificacion__equipos','solicitud__detalles.ID_Especificacion_Equipo','=','especificacion__equipos.ID_Especificacion_Equipo')
        ->join('especificacion__software','solicitud__detalles.ID_Especificacion_Software','=','especificacion__software.ID_Especificacion_Software')->paginate(6);
        
        return Inertia::render('Admin/Solicitud/Index',[
            'solis' => $solis,
        ]);
    }

    public function show($id)
    {
        return Inertia::render('User/Lista',[
            'laptops' =>Solicitud_Detalle::where('ID_Tipo_Equipo',$id)->get(),
            'especificacion' =>Solicitud_Detalle::where('ID_Tipo_Equipo',$id)->get()
        ]);
    }

}
