<?php

namespace App\Http\Controllers;

use App\Models\Software;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class UserSoftwareController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('User/InfoSoftware',[
            'infoSoftwares' => Software::all()->where('Editor_Software','=','ADMIN')
        ]);
    }

    public function create() 
    {
        return Inertia::render('User/Software/Create');
    }

    public function store(Request $request)
    {
        $request ->validate([
            'ID_Uso_Equipo' => 'required',
            'Nombre_Software' => 'required',
            'Imagen' => 'required|image|mimes:jpg,jpeg,png,svg|max:1024',
            'Version_Software' => 'required',
            'Descripcion_Software' => 'required',
            'Editor_Software' => 'required',
        ]);

        $softs = $request->all();

        if($imagen = $request->file('Imagen')) {
            $rutaGuardarImg = 'images/softwares';
            $imagenProducto = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $tipo_equip['Imagen'] = "$imagenProducto";         
        }
      
        Software::create($softs);
        return redirect()->route('d.usersoftwares.index');
    }

    
}
