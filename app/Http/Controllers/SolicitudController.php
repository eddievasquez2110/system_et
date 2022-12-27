<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use App\Models\Tipo_Equipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class SolicitudController extends Controller
{
    
    public function carritoindex()
    {
       return Inertia::render('User/Carrito');
    }

    public function carritoAdd(Request $request,$tipo)
    {
        $tipoEquipo = $tipo;
        $cantidad = $request -> quantity;
        $data = auth()->user()->id;
        dd($tipoEquipo);
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
