<?php

namespace App\Http\Controllers;

use App\Models\Oficina;
use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('soloadmin', ['only' => ['index']]);
    }

    public function index(Request $request)
    {
        $search = $request->query('search');
        $usua = User::query()->when(
            $search,
            fn ($query) =>
            $query->where('email', 'LIKE', "%{$search}%")->orWhere('name', 'LIKE', "%{$search}%")
        )->with('Rol', 'Oficina')
            ->join('rols', 'users.ID_Rol', '=', 'rols.ID_Rol')
            ->join('oficinas', 'users.ID_Oficina', '=', 'oficinas.ID_Oficina')->paginate(5);

        return Inertia::render('Admin/Usuarios/Usuario/Index', [
            'usua' => $usua,
        ]);
    }

    public function create()
    {
        $ofis = Oficina::all();
        $rols = Rol::all();
        return Inertia::render('Admin/Usuarios/Usuario/Create', [
            'ofis' => $ofis,
            'rols' => $rols
        ]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'ID_Rol' => 'required',
            'ID_Oficina' => 'required',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', Rules\Password::defaults()],
        ]);

        $usua = $request->all();

        User::create([
            'ID_Rol' => $usua['ID_Rol'],
            'ID_Oficina' => $usua['ID_Oficina'],
            'name' => $usua['name'],
            'email' => $usua['email'],
            'password' => Hash::make($usua['password']),
        ]);
        // event(new Registered($user));
        return redirect()->route('d.usuarios.index');
    }


    public function show(User $user)
    {
        return view('users.profile', [
            'users' => User::findOrFail($user)
        ]);
    }


    public function edit($id)
    {
        $usua = User::with('Rol', 'Oficina')
            ->join('rols', 'users.ID_Rol', '=', 'rols.ID_Rol')
            ->join('oficinas', 'users.ID_Oficina', '=', 'oficinas.ID_Oficina')->where('id', $id)->first()
            ->makeVisible('password');

        $ofis = Oficina::all();
        $rols = Rol::all();

        return Inertia::render('Admin/Usuarios/Usuario/Edit', [
            'usua' => $usua,
            'ofis' => $ofis,
            'rols' => $rols
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'ID_Rol' => 'required',
            'ID_Oficina' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $usua = $request->all();

        User::where('id', $id)->update([
            'ID_Rol' => $usua['ID_Rol'],
            'ID_Oficina' => $usua['ID_Oficina'],
            'name' => $usua['name'],
            'email' => $usua['email'],
            'password' => Hash::make($usua['password']),
        ]);
        return redirect()->route('d.usuarios.index');    
    }

    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('d.usuarios.index');
    }

    public function getRol()
    {
        $usua = Rol::select('ID_Rol', 'Nombre_Rol')->get();
        return $usua;
    }

    public function exportExcel()
    {
        $user = User::all();
        return Excel::download($user, 'users.xlsx');
    }
    
}

