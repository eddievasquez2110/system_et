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
        $search = $request->query('search');
        $softs = Software::query()->when($search, fn($query) => 
        $query->where('Nombre_Software','LIKE',"%{$search}%")->orWhere('ID_Software', 'LIKE', "%{$search}%")
         )->where('Editor_Software','=','ADMIN')->paginate(6);
        return Inertia::render('User/usersoftwares/Index',[
            'soft' => $softs
        ]);
    }

    public function create() 
    {
        return Inertia::render('User/Software/Create');
    }

    public function store(Request $request)
    {
        $request ->validate([
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
        return redirect()->route('user');
    }

    public function edit($id)
    {
        $softs = Software::where('ID_Software',$id)->first();
        return Inertia::render('User/Software/Edit',[
            'soft' => $softs,
        ]);
    }

    public function update(Request $request, $id)
    {
         $request ->validate([
             'Nombre_Software' => 'required',
             'Editor_Software' => 'required',
          ]);
         
        $tipo_equip = $request->all();
        if($imagen = $request->file('Imagen')){
            
            $rutaGuardarImg = 'images/softwares';
            $imagenProducto = date('YmdHis') . "." . $imagen->getClientOriginalExtension(); 
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $tipo_equip['Imagen'] = "$imagenProducto";
         }
        
        Software::where('ID_Software',$id)->update([
            'Nombre_Software' => $tipo_equip['Nombre_Software'],
            'Imagen' => $tipo_equip['Imagen']
        ]);
        return redirect()->route('d.usersoftwares.index');
    }

    public function destroy($id)
    {
        Software::where('ID_Software',$id)->delete();
        return redirect()->route('d.usersoftwares.index');
    }
}
