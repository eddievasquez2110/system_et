<?php

namespace App\Http\Controllers;

use App\Models\Solicitud_Detalle;
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
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        return Inertia::render('User/Lista',[
            'solicitudes_D' =>Solicitud_Detalle::where('ID_Tipo_Equipo',$id)->get(),
            'usuarios' =>User::where('ID_Tipo_Equipo',$id)->get()
        ]);
    }

    
    public function edit(Solicitud_Detalle $solicitud_Detalle)
    {
        //
    }

    
    public function update(Request $request, Solicitud_Detalle $solicitud_Detalle)
    {
        //
    }

    
    public function destroy(Solicitud_Detalle $solicitud_Detalle)
    {
        //
    }
}
