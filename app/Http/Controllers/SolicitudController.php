<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use App\Models\Solicitud_Detalle;
use App\Models\Tipo_Equipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class SolicitudController extends Controller
{
    
    public function carritoindex()
    {
       
       
    }

    public function obtenerProductos()
    {
       
    }
   
    public function create()
    {
        //
    }
    
    
    

    
    public function show(Solicitud $solicitud)
    {
        //
    }

    
    public function edit(Solicitud $solicitud)
    {
        //
    }

    
    public function update(Request $request, Solicitud $solicitud)
    {
        //
    }

    
    public function destroy(Solicitud $solicitud)
    {
        //
    }
}
