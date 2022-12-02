<?php

namespace App\Http\Controllers;

use App\Models\Tipo_Equipo;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminTipoEquipoController extends Controller
{
    public function index()
    {
        $tiposList = Tipo_Equipo::orderBy('ID_Tipo_Equipo')->paginate(3);
        return Inertia::render('Admin/Tipo_Equipo/Admin',[
            'tipos' => $tiposList
        ]);
    }

    public function create()
    {
        return Inertia::render('Admin/Tipo_Equipo/Create');
    }

    public function store(Request $request)
    {
        $request ->validate([
            'Nombre_Tipo_Equipo' => 'required',
            'Imagen' => 'required|image|mimes:jpeg,png,svg|max:1024'
        ]);

        $tipo_equip = $request->all();

        if($imagen = $request->file('Imagen')) {
            $rutaGuardarImg = 'images/';
            $imagenProducto = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $tipo_equip['Imagen'] = "$imagenProducto";         
        }

        Tipo_Equipo::create($tipo_equip);
        return redirect()->route('tequipo.index');
    }

    public function edit($id)
    {
        $tipos = Tipo_Equipo::where('ID_Tipo_Equipo',$id)->get();
        return Inertia::render('Admin/Tipo_Equipo/Edit',[
            'tipo' => $tipos
        ]);
    }

    public function update($id, Request $request)
    {
        $request ->validate([
            'Nombre_Tipo_Equipo' => 'required',
        ]);

        $tipo_equip = $request->all();

        /* if($imagen = $request->file('Imagen')){
            $rutaGuardarImg = 'images/';
            $imagenProducto = date('YmdHis') . "." . $imagen->getClientOriginalExtension(); 
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $tipo_equip['Imagen'] = "$imagenProducto";
         }else{
            unset($tipo_equip['Imagen']);
         } */

        Tipo_Equipo::where('ID_Tipo_Equipo',$id)->update($tipo_equip);
        return redirect()->route('tequipo.index');
    }

    public function destroy($id)
    {
        Tipo_Equipo::where('ID_Tipo_Equipo',$id)->delete();
        return redirect()->route('tequipo.index');
    }
}
