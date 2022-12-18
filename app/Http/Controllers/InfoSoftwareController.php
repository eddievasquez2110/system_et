<?php

namespace App\Http\Controllers;

use App\Models\Oficina;
use App\Models\Software;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class InfoSoftwareController extends Controller
{
   
    public function index()
    {
        return Inertia::render('User/InfoSoftware',[
            'infoSoftwares' => Software::all(),
            // 'usuarios' => User::with('rol:ID_Rol,Nombre_Rol,created_at','oficina:ID_Oficina,Nombre_Oficina,Cargo_Oficina,created_at')->get(),
            // 'oficina' => Oficina::all(),
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
