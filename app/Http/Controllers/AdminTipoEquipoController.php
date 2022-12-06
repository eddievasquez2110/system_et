<?php

namespace App\Http\Controllers;

use App\Models\Tipo_Equipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class AdminTipoEquipoController extends Controller
{
    public function index()
    {
        $tipos = Tipo_Equipo::orderBy('ID_Tipo_Equipo')->paginate(6);
        return Inertia::render('Admin/Equipos/Tipo_Equipo/Index',[
            'tipos' => $tipos
        ]);
    }

    public function create() 
    {
        return Inertia::render('Admin/Equipos/Tipo_Equipo/Create');
    }

    public function store(Request $request)
    {
        $request ->validate([
            'Nombre_Tipo_Equipo' => 'required',
            'Imagen' => 'required|image|mimes:jpeg,png,svg|max:1024'
        ]);

        $tipo_equip = $request->all();

        if($imagen = $request->file('Imagen')) {
            $rutaGuardarImg = 'images/equipos';
            $imagenProducto = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $tipo_equip['Imagen'] = "$imagenProducto";         
        }
      
        Tipo_Equipo::create($tipo_equip);
        return redirect()->route('d.tipoequipos.index');
    }

    public function edit($id)
    {
        $equipos = Tipo_Equipo::where('ID_Tipo_Equipo',$id)->first();
        return Inertia::render('Admin/Equipos/Tipo_Equipo/Edit',[
            'equipo' => $equipos,
        ]);
    }

    public function update(Request $request, $id)
    {
         $request ->validate([
             'Nombre_Tipo_Equipo' => 'required'
          ]);
         
        $tipo_equip = $request->all();
        if($imagen = $request->file('Imagen')){
            
            $rutaGuardarImg = 'images/equipos';
            $imagenProducto = date('YmdHis') . "." . $imagen->getClientOriginalExtension(); 
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $tipo_equip['Imagen'] = "$imagenProducto";
         }
        
        Tipo_Equipo::where('ID_Tipo_Equipo',$id)->update([
            'Nombre_Tipo_Equipo' => $tipo_equip['Nombre_Tipo_Equipo'],
            'Imagen' => $tipo_equip['Imagen']
        ]);
        return redirect()->route('d.tipoequipos.index');
    }

    public function destroy($id)
    {
        Tipo_Equipo::where('ID_Tipo_Equipo',$id)->delete();
        return redirect()->route('d.tipoequipos.index');
    }
}
