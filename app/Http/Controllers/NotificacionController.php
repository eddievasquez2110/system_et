<?php

namespace App\Http\Controllers;

use App\Models\Notificacion;
use Illuminate\Http\Request;
use Inertia\Inertia;

class NotificacionController extends Controller
{
    
    public function index()
    {
        return Inertia::render('Admin/Notificaciones/Index', [
            'noti' => Notificacion::all(),
        ]);
    }

   
    public function create()
    {
        return Inertia::render('Admin/Notificaciones/Create');
    }

    
    public function store(Request $request)
    {
        $request ->validate([
            'Email_User' => 'required',
            'Asunto_User' => 'required',
            'Mensaje_User' => 'required',
        ]);

        $noti = $request->all();

        Notificacion::create($noti);
        return redirect()->route('notificaciones.index');
    }

   
    public function show(Notificacion $notificacion)
    {
        //
    }

  
    public function edit(Notificacion $notificacion)
    {
        //
    }


    public function update(Request $request, Notificacion $notificacion)
    {
        //
    }


    public function destroy(Notificacion $notificacion)
    {
        //
    }
}
