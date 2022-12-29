<?php

namespace App\Http\Controllers;

use App\Models\Especificacion_Equipo;
use App\Models\Tipo_Equipo;
use App\Models\Uso_Equipo;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminEspecificacionEquipoController extends Controller
{
    public function index(Request $request)
    {
        
         $search = $request->query('search');
         $espEquipos = Especificacion_Equipo::query()->when($search, fn($query) => 
         $query->where('Nombre_Tipo_Equipo','LIKE',"%{$search}%")->orWhere('Nombre_Uso_Equipo', 'LIKE', "%{$search}%")->orderBy('ID_Especificacion_Equipo')
          )->with('tipo__equipos','uso__equipos')
        ->join('tipo__equipos','especificacion__equipos.ID_Tipo_Equipo','=','tipo__equipos.ID_Tipo_Equipo')
        ->join('uso__equipos','especificacion__equipos.ID_Uso_Equipo','=','uso__equipos.ID_Uso_Equipo')->paginate(5);
        
        return Inertia::render('Admin/Equipos/Especificacion_Equipo/Index',[
            'espEquipos' => $espEquipos,
        ]);
    }

    public function create() 
    {
        return Inertia::render('Admin/Equipos/Especificacion_Equipo/Create',[
            'tipoEquipos'=>Tipo_Equipo::all(),
            'usoEquipos'=>Uso_Equipo::all()
        ]);
    }

    public function store(Request $request)
    {
        $request ->validate([
            'ID_Tipo_Equipo' => 'required',
            'ID_Uso_Equipo' => 'required',
            'Nombre_Especificacion_Equipo' => 'required',
            'Especificacion_Equipo' => 'required',
        ]);

        $espEquipos = $request->all();

        Especificacion_Equipo::create($espEquipos);
        return redirect()->route('d.especificacionequipo.index');
    }

    public function edit($id)
    {
        $espEquipos = Especificacion_Equipo::with('tipo__equipos','uso__equipos')
        ->join('tipo__equipos','especificacion__equipos.ID_Tipo_Equipo','=','tipo__equipos.ID_Tipo_Equipo')
        ->join('uso__equipos','especificacion__equipos.ID_Uso_Equipo','=','uso__equipos.ID_Uso_Equipo')->where('ID_Especificacion_Equipo',$id)->first();
        return Inertia::render('Admin/Equipos/Especificacion_Equipo/Edit',[
            'espEquipos' => $espEquipos,
            'tipoEquipos'=>Tipo_Equipo::all(),
            'usoEquipos'=>Uso_Equipo::all()
        ]);
    }

    public function update(Request $request, $id)
    {
         $request ->validate([
             'ID_Tipo_Equipo' => 'required',
             'ID_Uso_Equipo' => 'required',
             'Nombre_Especificacion_Equipo' => 'required',
             'Especificacion_Equipo' => 'required',
          ]);
         
        $espEquipos = $request->all();

        Especificacion_Equipo::where('ID_Especificacion_Equipo',$id)->update([
            'ID_Tipo_Equipo' => $espEquipos['ID_Tipo_Equipo'],
            'ID_Uso_Equipo' => $espEquipos['ID_Uso_Equipo'],
            'Nombre_Especificacion_Equipo' => $espEquipos['Nombre_Especificacion_Equipo'],
            'Especificacion_Equipo' => $espEquipos['Especificacion_Equipo'],
        ]);

        return redirect()->route('d.especificacionequipo.index');
    }

    public function destroy($id)
    {
        Especificacion_Equipo::where('ID_Especificacion_Equipo',$id)->delete();
        return redirect()->route('d.especificacionequipo.index');
    }
}
