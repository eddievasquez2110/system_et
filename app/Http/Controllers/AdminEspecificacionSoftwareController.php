<?php

namespace App\Http\Controllers;

use App\Models\Especificacion_Software;
use App\Models\Software;
use App\Models\Tipo_Equipo;
use App\Models\Uso_Equipo;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminEspecificacionSoftwareController extends Controller
{
    public function index(Request $request)
    {
         $search = $request->query('search');
         $espSoftwares = Especificacion_Software::query()->when($search, fn($query) => 
         $query->where('Nombre_Software','LIKE',"%{$search}%")->orWhere('Nombre_Uso_Equipo', 'LIKE', "%{$search}%")
          )->with('software','uso__equipos')
        ->join('software','especificacion__software.ID_Software','=','software.ID_Software')
        ->join('uso__equipos','especificacion__software.ID_Uso_Equipo','=','uso__equipos.ID_Uso_Equipo')->paginate(5);

        return Inertia::render('Admin/Softwares/Especificacion_Software/Index',[
            'espSoftwares' => $espSoftwares,
            //'tipoEquipos' => $TipoList
        ]);
    }

    public function create() 
    {
        return Inertia::render('Admin/Softwares/Especificacion_Software/Create');
    }

    public function store(Request $request)
    {
        $request ->validate([
            'Nombre_Software' => 'required',
            'Nombre_Uso_Equipo' => 'required',
            'Nombre_Especificacion_Software' => 'required',
            'Especificacion_Software' => 'required',
        ]);

        $espSoftwares = $request->all();

        

        Especificacion_Software::create($espSoftwares);
        return redirect()->route('d.especificacionsoftware.index');
    }

    public function edit($id)
    {
        $espSoftwares = Especificacion_Software::with('software','uso__equipos')
        ->join('software','especificacion__software.ID_Software','=','software.ID_Software')
        ->join('uso__equipos','especificacion__software.ID_Uso_Equipo','=','uso__equipos.ID_Uso_Equipo')->where('ID_Especificacion_Software',$id)->first();
        return Inertia::render('Admin/Softwares/Especificacion_Software/Edit',[
            'espSoftwares' => $espSoftwares,
        ]);
    }

    public function update(Request $request, $id)
    {
         $request ->validate([
             'Nombre_Software' => 'required',
             'Nombre_Uso_Equipo' => 'required',
             'Nombre_Especificacion_Software' => 'required',
             'Especificacion_Software' => 'required',
          ]);
         
        $espSoftwares = $request->all();

        Software::where('ID_Software',$id)->update([
            'Nombre_Software' => $espSoftwares['Nombre_Software'],
        ]);

        Uso_Equipo::where('ID_Uso_Equipo',$id)->update([
            'Nombre_Uso_Equipo' => $espSoftwares['Nombre_Uso_Equipo'],
        ]);

        Especificacion_Software::where('ID_Especificacion_Software',$id)->update([
            'Nombre_Especificacion_Software' => $espSoftwares['Nombre_Especificacion_Software'],
            'Especificacion_Software' => $espSoftwares['Especificacion_Software'],
        ]);

        return redirect()->route('d.especificacionsoftware.index');
    }

    public function destroy($id)
    {
        Especificacion_Software::where('ID_Especificacion_Software',$id)->delete();
        return redirect()->route('d.especificacionsoftware.index');
    }

}
