<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\TipoEquipoController;
use App\Http\Middleware\SoloSuperAdmin;
use App\Models\Rol;
use Doctrine\DBAL\Schema\Index;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


Route::get('/', function() {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

    Route::get('/dashboard', function () {
        return Inertia::render('SuperAdmin');
    })->middleware(['auth', 'verified','solosuperadmin'])->name('superadmin'); 

    Route::get('/admin', function () {
        return Inertia::render('Admin');
    })->middleware(['auth', 'verified','soloadmin'])->name('admin'); 


 Route::resource('/equipos',TipoEquipoController::class)
         ->only(['index'])
         ->middleware(['auth','verified','solouser']);

/* Route::get('equipos',[TipoEquipoController::class,'index'])
    ->name('equipotest')->middleware(['auth']); */

require __DIR__.'/auth.php';