<?php

namespace App\Http\Controllers;

use App\Models\Solicitud_Detalle;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminSolicitudController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        $solis = Solicitud_Detalle::query()->when($search, fn($query) => 
        $query->where('Nombre_Especificacion_Equipo','LIKE',"%{$search}%")->orWhere('Nombre_Especificacion_Software', 'LIKE', "%{$search}%")
        )->with('solicituds','especificacion__equipos','especificacion__software')
        ->join('solicituds','solicitud__detalles.ID_Solicitud','=','solicituds.ID_Solicitud')
        ->join('especificacion__equipos','solicitud__detalles.ID_Especificacion_Equipo','=','especificacion__equipos.ID_Especificacion_Equipo')
        ->join('especificacion__software','solicitud__detalles.ID_Especificacion_Software','=','especificacion__software.ID_Especificacion_Software')
        ->join('users','solicituds.id','=','users.id')
        ->join('oficinas','users.ID_Oficina','=','oficinas.ID_Oficina')
        ->paginate(5);
        
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
