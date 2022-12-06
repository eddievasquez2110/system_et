<?php

namespace App\Http\Controllers;

use App\Models\Uso_Equipo;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminUsoEquipoController extends Controller
{
    
    public function index()
    {
        $usos = Uso_Equipo::orderBy('ID_Uso_Equipo')->paginate(6);
        return Inertia::render('Admin/Equipos/Uso_Equipo/Index',[
            'usos' => $usos
        ]);
    }

    public function create() 
    {
        return Inertia::render('Admin/Equipos/Uso_Equipo/Create');
    }

    public function store(Request $request)
    {
        $request ->validate([
            'Nombre_Uso_Equipo' => 'required'
        ]);

        $usos = $request->all();

        Uso_Equipo::create($usos);
        return redirect()->route('d.usoequipos.index');
    }

    public function edit($id)
    {
        $usos = Uso_Equipo::where('ID_Uso_Equipo',$id)->first();
        return Inertia::render('Admin/Equipos/Uso_Equipo/Edit',[
            'usos' => $usos,
        ]);
    }

    public function update(Request $request, $id)
    {
         $request ->validate([
             'Nombre_Uso_Equipo' => 'required'
          ]);
         
        $usos = $request->all();
        
        Uso_Equipo::where('ID_Uso_Equipo',$id)->update([
            'Nombre_Uso_Equipo' => $usos['Nombre_Uso_Equipo']
        ]);
        return redirect()->route('d.usoequipos.index');
    }

    public function destroy($id)
    {
        Uso_Equipo::where('ID_Uso_Equipo',$id)->delete();
        return redirect()->route('d.usoequipos.index');
    }

}
