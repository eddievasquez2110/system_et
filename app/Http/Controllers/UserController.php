<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('solouser',['only'=> ['index']]);
    }

    public function index()
    {
        
        return Inertia::render('Users/Index', [
            'users' => User::all()->map(function ($user) {
                return [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'edit_url' => URL::route('users.edit', $user),
                ];
            }),
            'create_url' => URL::route('users.create'),
        ]);
    }
    
    public function create()
    {
        
    }
    
    public function store(Request $request)
    {
        
    }

    
    public function show(User $user)
    {
        return view('users.profile', [
            'users' => User::findOrFail($user)
        ]);
    }

    
    public function edit(User $User)
    {
        
    }

    
    public function update(Request $request, User $user)
    {
        
    }

    
    public function destroy(User $user)
    {
        
    }
}
