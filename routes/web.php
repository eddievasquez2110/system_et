<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminTipoEquipoController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\TipoEquipoController;
use App\Http\Middleware\SoloSuperAdmin;
use App\Models\Rol;
use Doctrine\DBAL\Schema\Index;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


/*
Route::get('/', function() {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});*/

Route::get('/', [AuthenticatedSessionController::class, 'create'])
        ->name('login');


Route::get('/inicio', [TipoEquipoController::class,'index'])
->middleware(['auth', 'verified','solouser'])->name('user'); 
 
Route::get('/inicio/{id}',[TipoEquipoController::class,'show'])
        ->name('inicio.show');

/* Route::get('/admin', function(){
            return Inertia::render('Admin/Admin');
        })->middleware(['auth'])->name('admin.index'); */

Route::resource('/tequipo', AdminTipoEquipoController::class)
                ->middleware(['auth']);

Route::get('/dashboard', function () {
    return Inertia::render('SuperAdmin/Index');
})->middleware(['auth', 'verified','solosuperadmin'])->name('superadmin');

Route::get('/reportes', function () {
    return Inertia::render('Admin/Reportes');
})->middleware(['auth', 'verified','soloadmin']);



require __DIR__.'/auth.php';
