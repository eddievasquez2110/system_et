<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminSoftwareController;
use App\Http\Controllers\AdminEspecificacionEquipoController;
use App\Http\Controllers\AdminEspecificacionSoftwareController;
use App\Http\Controllers\AdminTipoEquipoController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\TipoEquipoController;
use App\Http\Controllers\SoftwareController;
use App\Http\Controllers\AdminUsoEquipoController;
use App\Http\Controllers\SolicitudDetalleController;
use App\Http\Controllers\AdminReporteController;
use App\Http\Controllers\UserController;
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
    Route::get('/superadmin', function () {
        return Inertia::render('SuperAdmin/Index');
    })->name('superadmin');

    Route::get('/superadmin/reportes', [SolicitudDetalleController::class,'index'])
         ->name('reportes.a');
});

//RUTAS SOLO ADMIN
Route::middleware(['auth', 'verified','soloadmin'])->group(function () {
     Route::get('/dashboard', function () {
         return Inertia::render('Admin/Admin');
     })->name('admin');

    //Route::resource('/dashboard/tipoequipos', AdminTipoEquipoController::class);

    Route::get('/dashboard/tipoequipos', [AdminTipoEquipoController::class,'index'])
         ->name('d.tipoequipos.index');

    Route::get('/dashboard/tipoequipos/create', [AdminTipoEquipoController::class,'create'])
         ->name('d.tipoequipos.create');
    
    Route::post('/dashboard/tipoequipos/store', [AdminTipoEquipoController::class,'store'])
         ->name('d.tipoequipos.store');
    
    Route::put('/dashboard/tipoequipos/edit', [AdminTipoEquipoController::class,'edit'])
         ->name('d.tipoequipos.edit');

    Route::delete('/dashboard/tipoequipos/{id}', [AdminTipoEquipoController::class,'destroy'])
         ->name('d.tipoequipos.destroy');

    Route::get('/dashboard/usoequipos', [AdminUsoEquipoController::class,'index'])
         ->name('d.usoequipos');

    Route::get('/dashboard/especificacionequipo', [AdminEspecificacionEquipoController::class,'index'])
         ->name('d.especificacionequipo');
    
    Route::get('/dashboard/softwares', [AdminSoftwareController::class,'index'])
         ->name('d.softwares');

    Route::get('/dashboard/especificacionsoftware', [AdminEspecificacionSoftwareController::class,'index'])
         ->name('d.especificacionsoftware');

    Route::get('/dashboard/reportes', [AdminReporteController::class,'index'])
         ->name('d.reportes');

    

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