<?php

namespace App\Http\Controllers;

use App\Models\Oficina;
use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('soloadmin',['only'=> ['index']]);
    }

    public function index()
    {  
        $usua = User::with('Rol','Oficina')
        ->join('rols','users.ID_Rol','=','rols.ID_Rol')
        ->join('oficinas','users.ID_Oficina','=','oficinas.ID_Oficina')->paginate(6);
        
        return Inertia::render('Admin/Usuarios/Index',[
            'usua' => $usua,
        ]);
        
    }
    
    public function create()
    {
        return Inertia::render('Admin/Usuarios/Create');
    }
    
    public function store(Request $request)
    {
    
        $request ->validate([
            'Nombre_Rol'=> 'required',
            'Cargo_Oficina'=> 'required',
            'Nombre_Oficina'=> 'required',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', Rules\Password::defaults()],
        ]);

        $usua = $request->all();
        
        Rol::create($usua);
        Oficina::create($usua);
        $user = User::create([
            'ID_Rol' => $request->ID_Rol,
            'ID_Oficina' => $request->ID_Oficina,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        event(new Registered($user));
        return redirect()->route('d.Usuarios.index');
        Auth::login($user);
    }

    
    public function show(User $user)
    {
        return view('users.profile', [
            'users' => User::findOrFail($user)
        ]);
    }

    
    public function edit($id)
    {
        $usua = User::with('rol','oficina')
        ->join('rols','users.ID_Rol','=','rols.ID_Rol')
        ->join('oficinas','users.ID_Oficina','=','oficinas.ID_Oficina')->where('id',$id)->first();
        
        return Inertia::render('Admin/Usuarios/Edit',[
            'usua' => $usua,
        ]);

    }

    
    public function update(Request $request, $id)
    {
        $request ->validate([
            'ID_Rol'=> 'required',
            'ID_Oficina'=> 'required',
            'name'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
         ]);
        
       $usua = $request->all();

       Rol::where('ID_Rol',$id)->update([
           'Nombre_Rol' => $usua['Nombre_Rol'],
       ]);

       Oficina::where('ID_Oficina',$id)->update([
           'Nombre_Oficina' => $usua['Nombre_Oficina'],
           'Cargo_Oficina' => $usua['Cargo_Oficina'],
       ]);

       User::where('id',$id)->update([
           'name' => $usua['name'],
           'email' => $usua['email'],
           'password' => $usua['password'],
       ]);

       return redirect()->route('d.Usuarios.index');
    }

    
    public function destroy($id)
    {
        User::where('id',$id)->delete();
        return redirect()->route('d.Usuarios.index');
    }
}
