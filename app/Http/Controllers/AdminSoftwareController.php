<?php

namespace App\Http\Controllers;

use App\Models\Software;
use App\Models\Uso_Equipo;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminSoftwareController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        $soft = Software::query()->when($search, fn($query) => 
        $query->where('Nombre_Software','LIKE',"%{$search}%")->orWhere('ID_Software', 'LIKE', "%{$search}%")->orderBy('ID_Software')
         )->paginate(5);
        return Inertia::render('Admin/Softwares/Software/Index',[
            'soft' => $soft
        ]);
    }

    public function create() 
    {
        return Inertia::render('Admin/Softwares/Software/Create',[
            'usoEquipo' => Uso_Equipo::all(),
        ]);
    }

    public function store(Request $request)
    {
        $request ->validate([
            'Nombre_Software' => 'required',
            'Imagen' => 'required|image|mimes:jpg,jpeg,png,svg|max:1024',
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
        $soft = Software::where('ID_Software',$id)->first();
        return Inertia::render('Admin/Softwares/Software/Edit',[
            'soft' => $soft,
        ]);
    }

    public function update(Request $request, $id)
    {
         $request ->validate([
             'Nombre_Software' => 'required',
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
            'Imagen' => $soft['Imagen'],
            'Version_Software' => $soft['Version_Software'],
            'Descripcion_Software' => $soft['Descripcion_Software'],
        ]);
        return redirect()->route('d.softwares.index');
    }

    public function destroy($id)
    {
        Software::where('ID_Software',$id)->delete();
        return redirect()->route('d.softwares.index');
    }
}
