<?php

namespace App\Http\Controllers;

use App\Models\Notificacion;
use App\Models\Solicitud;
use Illuminate\Http\Request;
use Inertia\Inertia;

class NotificacionController extends Controller
{
    
    public function index(Request $request)
    {
        $search = $request->query('search');

        $countNoti = Notificacion::query('count(*) as filas ')->where('notificacions.Estado','pendiente')->get();
        
        $notis = Notificacion::query()->when($search, fn($query) => 
        $query->where('Nombre_User','LIKE',"%{$search}%")->orWhere('id', 'LIKE', "%{$search}%")
         )->where('Estado','=','pendiente')->paginate(6);
        return Inertia::render('Admin/Notificaciones/Index',[
            'notis' => $notis,
            'countNoti' => $countNoti,
        ]);
    }

   
    public function create()
    {
        return Inertia::render('Admin/Notificaciones/Create');
    }

    
    public function store(Request $request)
    {
        $request ->validate([
            'Nombre_User' => 'required',
            'Email_User' => 'required',
            'Asunto_User' => 'required',
            'Mensaje_User' => 'required',
        ]);

        $notis = $request->all();

        Notificacion::create($notis);
        return redirect()->route('login');
    }

    public function show()
    {
        return Inertia::render('Admin/Notificaciones/Index',[
            'soli' =>Solicitud::get()->count()->where('Estado','=','pendiente'),
        ]);
    }

    public function destroy($id)
    {
        Notificacion::where('id',$id)->delete();
        return redirect()->route('notificaciones.index');
    }

    public function darAcceso()
    {
        return redirect()->route('d.Usuarios.create');
        return Inertia::render('Admin/Usuarios/Create',[
            'user' =>Solicitud::get()->count()->where('Estado','=','pendiente'),
        ]);
    }
}
