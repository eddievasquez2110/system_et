<?php

namespace App\Http\Controllers;

use App\Models\Software;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminSoftwareController extends Controller
{
    public function index()
    {
        $soft = Software::orderBy('ID_Software')->paginate(6);
        return Inertia::render('Admin/Softwares/Software/Index',[
            'soft' => $soft
        ]);
    }

    public function create() 
    {
        return Inertia::render('Admin/Softwares/Software/Create');
    }

    public function store(Request $request)
    {
        $request ->validate([
            'Nombre_Software' => 'required',
            'Imagen' => 'required|image|mimes:jpg,jpeg,png,svg|max:1024'
        ]);

        $soft = $request->all();

        if($imagen = $request->file('Imagen')) {
            $rutaGuardarImg = 'images/softwares';
            $imagenProducto = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $soft['Imagen'] = "$imagenProducto";         
        }
      
        Software::create($soft);
        return redirect()->route('d.softwares.index');
    }

    public function edit($id)
    {
        $sofft = Software::where('ID_Software',$id)->first();
        return Inertia::render('Admin/Softwares/Software/Edit',[
            'soft' => $sofft,
        ]);
    }

    public function update(Request $request, $id)
    {
         $request ->validate([
             'Nombre_Software' => 'required'
          ]);
         
        $soft = $request->all();
        if($imagen = $request->file('Imagen')){
            
            $rutaGuardarImg = 'images/softwares';
            $imagenProducto = date('YmdHis') . "." . $imagen->getClientOriginalExtension(); 
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $soft['Imagen'] = "$imagenProducto";
         }
        
        Software::where('ID_Software',$id)->update([
            'Nombre_Software' => $soft['Nombre_Software'],
            'Imagen' => $soft['Imagen']
        ]);
        return redirect()->route('d.softwares.index');
    }

    public function destroy($id)
    {
        Software::where('ID_Software',$id)->delete();
        return redirect()->route('d.softwares.index');
    }
}
