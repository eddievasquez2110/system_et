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
