<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run()
    {
        $user = User::create([
            'ID_Rol'=>1,
            'ID_Oficina'=>1,
            'name'=>'Super Admin',
            'email'=>'s_admin@gmail.com',
            'password'=>Hash::make('s_admin'),
        ]);

        $user = User::create([
            'ID_Rol'=>2,
            'ID_Oficina'=>1,
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('admin'),
        ]);

        $user = User::create([
            'ID_Rol'=>3,
            'ID_Oficina'=>2,
            'name'=>'user1',
            'email'=>'user1@gmail.com',
            'password'=>Hash::make('user1'),
        ]);

        $user = User::create([
            'ID_Rol'=>3,
            'ID_Oficina'=>3,
            'name'=>'user2',
            'email'=>'user2@gmail.com',
            'password'=>Hash::make('user2'),
        ]);
    }
}
