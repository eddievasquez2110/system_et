<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{

    public function run()
    {
        $user = User::create([
            'ID_Rol'=>1,
            'ID_Oficina'=>1,
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>'admin',
        ]);
    }
}
