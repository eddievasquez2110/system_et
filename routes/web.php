<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\EquipoController;
use App\Http\Middleware\SoloSuperAdmin;
use App\Models\Rol;
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


Route::get('/inicio', function () {
        return Inertia::render('User/Index');
})->middleware(['auth', 'verified','solouser'])->name('user'); 
 

Route::get('/admin', function () {
    return Inertia::render('Admin/Index',[
        'canRegister' => Route::has('registro'),
        'canReportes' => Route::has('reporte')
    ]);
})->middleware(['auth', 'verified','soloadmin'])->name('admin'); 

Route::get('/dashboard', function () {
    return Inertia::render('SuperAdmin/Index');
})->middleware(['auth', 'verified','solosuperadmin'])->name('superadmin');

Route::get('/reportes', function () {
    return Inertia::render('Admin/Reportes');
})->middleware(['auth', 'verified','soloadmin']);

Route::resource('equipos', EquipoController::class)
    ->only(['index', 'store', 'update', 'destroy'])
    ->middleware(['auth', 'verified','solouser']); 


require __DIR__.'/auth.php';
