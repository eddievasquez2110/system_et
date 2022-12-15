<?php

namespace App\Http\Controllers;

use App\Models\Especificacion_Equipo;
use App\Models\Solicitud;
use App\Models\Solicitud_Detalle;
use App\Models\Tipo_Equipo;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminSolicitudController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        $solis = Solicitud::query()->when($search, fn($query) => 
        $query->where('name','LIKE',"%{$search}%")->orWhere('Nombre_Oficina', 'LIKE', "%{$search}%")
        )->with('solicitud__detalles','users')
        ->join('solicitud__detalles','solicituds.ID_Solicitud','=','solicitud__detalles.ID_Solicitud')
        ->join('especificacion__equipos','solicitud__detalles.ID_Especificacion_Equipo','=','especificacion__equipos.ID_Especificacion_Equipo')
        ->join('tipo__equipos','especificacion__equipos.ID_Tipo_Equipo','=','tipo__equipos.ID_Tipo_Equipo')
        ->join('users','solicituds.id','=','users.id')
        ->join('oficinas','users.ID_Oficina','=','oficinas.ID_Oficina')
        
        ->paginate(5);
        
        return Inertia::render('Admin/Solicitud/Index',[
            'solis' => $solis,
        ]);
    }

    public function show($id)
    {
        return Inertia::render('Admin/Solicitud/Especificacion',[
            'laptops' =>Tipo_Equipo::where('ID_Tipo_Equipo',$id)->get(),
            'especificacion' =>Especificacion_Equipo::where('ID_Tipo_Equipo',$id)->get()
        ]);
    }


    public function aceptar($id)
    {
        Solicitud::where('ID_Solicitud',$id)->update([
            'Estado_Solicitud' => 'Aceptado'
        ]);
        return redirect()->route('d.solicituds');
    }

    public function rechazar($id)
    {
        Solicitud::where('ID_Solicitud',$id)->update([
            'Estado_Solicitud' => 'Rechazado'
        ]);
        return redirect()->route('d.solicituds');
    }

}
