<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Tipo_Equipo;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        //$equipo = Equipo::get();
        //return response()->json($equipo);

        // return Inertia::render('Equipo/Index', [
        //     'equipos' => Equipo::with('Especificacion:ID_Especificacion,ID_Uso_Equipo')->latest()->get()
        // ]);

        return Inertia::render('User/Index',[ 
            'equipos' => Tipo_Equipo::get()
        ]);


    }

    // public function create()
    // {
    //     //
    // }

    
    public function store(Request $request)
    {
        //
    }

   
    public function show(Equipo $equipo)
    {
        $eq = Equipo::where('ID_Equipo',$equipo->ID_Equipo)->first();
        return response()->json($eq);
    }

   
    // public function edit(Equipo $equipo)
    // {
    //     //
    // }

    public function update(Request $request, Equipo $equipo)
    {
        //
    }


    public function destroy(Equipo $equipo)
    {
        $equipo = Equipo::find($equipo);
        $equipo->delete();
    }
}
