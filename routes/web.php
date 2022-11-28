<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\TipoEquipoController;
use App\Http\Controllers\SoftwareController;
use App\Http\Controllers\ReporteController;
use App\Http\Middleware\SoloSuperAdmin;
use App\Models\Rol;
use Doctrine\DBAL\Schema\Index;
use Faker\Guesser\Name;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


//RUTA INICIO
Route::get('/', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

//RUTAS SOLO SUPER ADMIN
Route::middleware(['auth', 'verified','solosuperadmin'])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('SuperAdmin/Index');
    })->name('superadmin');
});

//RUTAS SOLO ADMIN
Route::middleware(['auth', 'verified','soloadmin'])->group(function () {
    Route::get('/admin', function () {
        return Inertia::render('Admin/Index');
    })->name('admin');

    Route::resource('reportes', AdminController::class);
});

//RUTAS SOLO USER
Route::middleware(['auth', 'verified','solouser'])->group(function () {

    Route::get('/inicio', [TipoEquipoController::class,'index'])
        ->name('user'); 
 
    Route::get('/inicio/{id}',[TipoEquipoController::class,'show'])
        ->name('inicio.show');

    Route::get('/solicitud', [SoftwareController::class,'index'])
        ->name('solicitud');
});



require __DIR__.'/auth.php';
