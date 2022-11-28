<?php

namespace App\Http\Controllers;

use App\Models\Solicitud_Detalle;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;


class SolicitudDetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Solicitud_Detalle  $solicitud_Detalle
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Inertia::render('User/Lista',[
            'solicitudes_D' =>Solicitud_Detalle::where('ID_Tipo_Equipo',$id)->get(),
            'usuarios' =>User::where('ID_Tipo_Equipo',$id)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Solicitud_Detalle  $solicitud_Detalle
     * @return \Illuminate\Http\Response
     */
    public function edit(Solicitud_Detalle $solicitud_Detalle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Solicitud_Detalle  $solicitud_Detalle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solicitud_Detalle $solicitud_Detalle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Solicitud_Detalle  $solicitud_Detalle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solicitud_Detalle $solicitud_Detalle)
    {
        //
    }
}
