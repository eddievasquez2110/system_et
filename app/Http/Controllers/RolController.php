<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RolController extends Controller
{
    
    public function index()
    {
        $roles = Rol::pluck('Nombre_Rol', 'ID_Rol');
        $roles->all();
        
    }
    
    public function create()
    {
        
    }
    
    public function store(Request $request)
    {
        
    }

    
    public function show(Rol $rol)
    {
        return view('rols.profile', [
            'rol' => Rol::findOrFail($rol)
        ]);
    }

    
    public function edit(Rol $rol)
    {
        
    }

    
    public function update(Request $request, Rol $rol)
    {
        
    }

    
    public function destroy(Rol $rol)
    {
        
    }

    public function getRol(){
        $rols = Rol::select('ID_Rol','Nombre_Rol')->get();
        return $rols;
    }
}
