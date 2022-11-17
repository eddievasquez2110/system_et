<?php

use App\Http\Controllers\AdminController;
use App\Http\Middleware\SoloSuperAdmin;
use App\Models\Rol;
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


Route::get('/user', function () {
    return Inertia::render('User');
})->middleware(['auth', 'verified','solouser'])->name('user'); 

require __DIR__.'/auth.php';