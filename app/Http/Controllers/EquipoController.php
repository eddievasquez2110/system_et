<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
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
        // return response()->json([
        //     'message' => 'Probando controlador y ruta equipos'
        // ]);
        return Inertia::render('User',[

        ]);
        // return Inertia::render('Equipo/Index', [
        //     'equipos' => Equipo::with('Especificacion:ID_Especificacion,ID_Uso_Equipo')->latest()->get()
        // ]);

    }

    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

   
    public function show(Equipo $equipo)
    {
        //
    }

   
    public function edit(Equipo $equipo)
    {
        //
    }

    public function update(Request $request, Equipo $equipo)
    {
        //
    }


    public function destroy(Equipo $equipo)
    {
        //
    }
}
