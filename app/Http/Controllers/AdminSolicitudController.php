<?php

namespace App\Http\Controllers;

use App\Models\Especificacion_Equipo;
use App\Models\Solicitud;
use App\Models\Solicitud_Detalle;
use App\Models\Tipo_Equipo;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminSolicitudController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        $solis = Solicitud_Detalle::query()->when($search, fn($query) => 
        $query->where('name','LIKE',"%{$search}%")->orWhere('email', 'LIKE', "%{$search}%")->orderBy('ID_Solicitud')
        )
        ->join('solicituds','solicitud__detalles.ID_Solicitud','=','solicituds.ID_Solicitud')
        ->join('users','solicituds.id','=','users.id')
        ->paginate(5);

        return Inertia::render('Admin/Solicitud/Index',[
            'solis' => $solis,
        ]);
    }

    public function store(Request $request)
    {
        $request ->validate([
            'id' => 'required',
            'Fecha_Solicitud' => 'required',
            'Estado_Solicitud' => 'required',
            'Documento' => 'required|image|mimes:jpeg,png,svg,pdf|max:1024'
        ]);

        $tipo_equip = $request->all();

        if($imagen = $request->file('Documento')) {
            $rutaGuardarImg = 'images/documentos';
            $imagenProducto = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $tipo_equip['Documento'] = "$imagenProducto";         
        }
      
        Tipo_Equipo::create($tipo_equip);
        return redirect()->route('d.solicituds');
    }

    public function show($id)
    {
        return Inertia::render('Admin/Solicitud/Especificacion',[
            'equipos' =>Tipo_Equipo::where('ID_Tipo_Equipo',$id)->get(),
            'especificacion' =>Especificacion_Equipo::where('ID_Tipo_Equipo',$id)->get()
        ]);
    }

    public function FiltroPendiente(Request $request)
    {
        $search = $request->query('search');
        $solis = Solicitud_Detalle::query()->when($search, fn($query) => 
        $query->where('name','LIKE',"%{$search}%")->orWhere('email', 'LIKE', "%{$search}%")->orderBy('ID_Solicitud')
        )->where('Estado_Solicitud','=','pendiente')
        ->join('solicituds','solicitud__detalles.ID_Solicitud','=','solicituds.ID_Solicitud')
        ->join('users','solicituds.id','=','users.id')
        ->paginate(5);

        return Inertia::render('Admin/Solicitud/Index',[
            'solis' => $solis,
        ]);
    }

    public function FiltroAceptado(Request $request)
    {
        $search = $request->query('search');
        $solis = Solicitud_Detalle::query()->when($search, fn($query) => 
        $query->where('name','LIKE',"%{$search}%")->orWhere('email', 'LIKE', "%{$search}%")->orderBy('ID_Solicitud')
        )->where('Estado_Solicitud','=','aceptado')
        ->join('solicituds','solicitud__detalles.ID_Solicitud','=','solicituds.ID_Solicitud')
        ->join('users','solicituds.id','=','users.id')
        ->paginate(5);

        return Inertia::render('Admin/Solicitud/Index',[
            'solis' => $solis,
        ]);
    }

    public function FiltroRechazado(Request $request)
    {
        $search = $request->query('search');
        $solis = Solicitud_Detalle::query()->when($search, fn($query) => 
        $query->where('name','LIKE',"%{$search}%")->orWhere('email', 'LIKE', "%{$search}%")->orderBy('ID_Solicitud')
        )->where('Estado_Solicitud','=','rechazado')
        ->join('solicituds','solicitud__detalles.ID_Solicitud','=','solicituds.ID_Solicitud')
        ->join('users','solicituds.id','=','users.id')
        ->paginate(5);

        return Inertia::render('Admin/Solicitud/Index',[
            'solis' => $solis,
        ]);
    }

    public function viewDocument($id)
    {
        return Inertia::render('Admin/Solicitud/ViewDocument',[
            'solis' =>Solicitud::where('ID_Solicitud',$id)->get(),
        ]);
    }

    public function viewProyecto($id)
    {
        return Inertia::render('Admin/Solicitud/ViewProyecto',[
            'solis' =>Solicitud::where('ID_Solicitud',$id)->get(),
        ]);
    }

    public function aceptar($id)
    {
        Solicitud::where('ID_Solicitud',$id)->update([
            'Estado_Solicitud' => 'Aceptado'
        ]);
        return redirect()->route('d.solicituds');
    }

    public function rechazar($id)
    {
        Solicitud::where('ID_Solicitud',$id)->update([
            'Estado_Solicitud' => 'Rechazado'
        ]);
        return redirect()->route('d.solicituds');
    }

}
