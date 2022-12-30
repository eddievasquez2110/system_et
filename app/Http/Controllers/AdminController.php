<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class AdminController extends Controller
{
    
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('soloadmin',['only'=> ['index']]);
    }

    public function index()
    {
        $mes = Solicitud::whereMonth('created_at',date(12))->get();
        $solicitud = Solicitud::all();
        $user = User::where('ID_Rol',2)->get();
        return Inertia::render('Admin/Admin',[
            'solicitud' => $solicitud,
            'user' => $user,
            'mes' => $mes
        ]);
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
