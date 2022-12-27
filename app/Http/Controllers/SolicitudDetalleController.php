<?php

namespace App\Http\Controllers;

use App\Models\Solicitud_Detalle;
use App\Models\Tipo_Equipo;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;


class SolicitudDetalleController extends Controller
{
    
    public function index()
    {
        return Inertia::render('Admin/Reportes',[
            'solicitud_D' => Solicitud_Detalle::all(),
        ]);
    }
    
    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $request ->validate([
            'ID_Solicitud' => 'required',
            'ID_Tipo_Equipo' => 'required',
            'ID_Software' => 'required',
            'Cantidad_Equipo' => 'required'
        ]);
        $soli_D = $request->all();
        Tipo_Equipo::create($soli_D);
        return redirect()->route('d.solicituds');
    }

    
    public function show($id)
    {
        return Inertia::render('User/Lista',[
            'solicitudes_D' =>Solicitud_Detalle::where('ID_Tipo_Equipo',$id)->get(),
            'usuarios' =>User::where('ID_Tipo_Equipo',$id)->get()
        ]);
    }

}
