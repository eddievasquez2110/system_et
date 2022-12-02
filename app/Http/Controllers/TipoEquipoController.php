<?php

namespace App\Http\Controllers;

use App\Models\Especificacion_Equipo;
use App\Models\Tipo_Equipo;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TipoEquipoController extends Controller
{
    
    public function index()
    {
        return Inertia::render('User/Index',[
            'equipos' => Tipo_Equipo::all(),
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
            'laptops' =>Tipo_Equipo::where('ID_Tipo_Equipo',$id)->get(),
            'especificacion' =>Especificacion_Equipo::where('ID_Tipo_Equipo',$id)->get()
        ]);
    }

    
    public function edit(Tipo_Equipo $tipo_Equipo)
    {
        //
    }

    
    public function update(Request $request, Tipo_Equipo $tipo_Equipo)
    {
        //
    }

    
    public function destroy(Tipo_Equipo $tipo_Equipo)
    {
        //
    }
}
