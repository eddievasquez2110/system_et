<?php

namespace App\Http\Controllers;

use App\Models\Oficina;
use Illuminate\Http\Request;
use Inertia\Inertia;

class OficinaController extends Controller
{
    
    public function index(Request $request)
    {
        $search = $request->query('search');
        $ofis = Oficina::query()->when($search, fn($query) => 
        $query->where('Nombre_Oficina','LIKE',"%{$search}%")->orWhere('ID_Oficina', 'LIKE', "%{$search}%")
         )->paginate(5);
        return Inertia::render('Admin/Usuarios/Oficina/Index',[
            'ofis' => $ofis
        ]);
    }

    public function create() 
    {
        return Inertia::render('Admin/Usuarios/Oficina/Create');
    }

    public function store(Request $request)
    {
        $request ->validate([
            'Nombre_Oficina' => 'required'
        ]);

        $ofis = $request->all();

        Oficina::create($ofis);
        return redirect()->route('d.oficinas.index');
    }

    public function edit($id)
    {
        $ofis = Oficina::where('ID_Oficina',$id)->first();
        return Inertia::render('Admin/Usuarios/Oficina/Edit',[
            'ofis' => $ofis,
        ]);
    }

    public function update(Request $request, $id)
    {
         $request ->validate([
             'Nombre_Oficina' => 'required'
          ]);
         
        $roles = $request->all();
        
        Oficina::where('ID_Oficina',$id)->update([
            'Nombre_Oficina' => $roles['Nombre_Oficina']
        ]);
        return redirect()->route('d.oficinas.index');
    }

    public function destroy($id)
    {
        Oficina::where('ID_Oficina',$id)->delete();
        return redirect()->route('d.oficinas.index');
    }
}
