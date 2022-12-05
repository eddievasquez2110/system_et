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
use App\Http\Controllers\InfoSoftwareController;
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

    Route::controller(AdminTipoEquipoController::class)->group(function () {
          Route::get('/dashboard/tipoequipos','index')->name('d.tipoequipos.index');
          Route::get('/dashboard/tipoequipos/create','create')->name('d.tipoequipos.create');
          Route::post('/dashboard/tipoequipos/store','store')->name('d.tipoequipos.store');
          Route::get('/dashboard/tipoequipos/edit/{id}','edit')->name('d.tipoequipos.edit');
          Route::put('/dashboard/tipoequipos/update/{id}','update')->name('d.tipoequipos.update');
          Route::delete('/dashboard/tipoequipos/{id}','destroy')->name('d.tipoequipos.destroy');
    });

    Route::controller(AdminSoftwareController::class)->group(function () {
        Route::get('/dashboard/softwares','index')->name('d.softwares.index');
        Route::get('/dashboard/softwares/create','create')->name('d.softwares.create');
        Route::post('/dashboard/softwares/store','store')->name('d.softwares.store');
        Route::get('/dashboard/softwares/edit/{id}','edit')->name('d.softwares.edit');
        Route::put('/dashboard/softwares/update/{id}','update')->name('d.softwares.update');
        Route::delete('/dashboard/softwares/{id}','destroy')->name('d.softwares.destroy');
    });

    Route::controller(AdminEspecificacionSoftwareController::class)->group(function () {
        Route::get('/dashboard/especificacionsoftware','index')->name('d.especificacionsoftware.index');
        Route::get('/dashboard/especificacionsoftware/create','create')->name('d.especificacionsoftware.create');
        Route::post('/dashboard/especificacionsoftware/store','store')->name('d.especificacionsoftware.store');
        Route::get('/dashboard/especificacionsoftware/edit/{id}','edit')->name('d.especificacionsoftware.edit');
        Route::put('/dashboard/especificacionsoftware/update/{id}','update')->name('d.especificacionsoftware.update');
        Route::delete('/dashboard/especificacionsoftware/{id}','destroy')->name('d.especificacionsoftware.destroy');
    });

//     Route::get('/dashboard/usoequipos', [AdminUsoEquipoController::class,'index'])
//          ->name('d.usoequipos');
     Route::controller(AdminUsoEquipoController::class)->group(function () {
          Route::get('/dashboard/usoequipos','index')->name('d.usoequipos.index');
          Route::get('/dashboard/usoequipos/create','create')->name('d.usoequipos.create');
          Route::post('/dashboard/usoequipos/store','store')->name('d.usoequipos.store');
          Route::get('/dashboard/usoequipos/edit','edit')->name('d.usoequipos.edit');
          Route::put('/dashboard/usoequipos/edit','update')->name('d.usoequipos.update');
          Route::delete('/dashboard/usoequipos/{id}','destroy')->name('d.usoequipos.destroy');
     });

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
//Route::middleware(['auth', 'verified','solouser'])->group(function () {

    Route::get('/inicio', [TipoEquipoController::class,'index'])
        ->name('user'); 
 
    Route::get('/inicio/{id}',[TipoEquipoController::class,'show'])
        ->name('inicio.show');

    Route::get('/solicitud', [SoftwareController::class,'index'])
        ->name('solicitud');

    Route::get('/infosoft', [InfoSoftwareController::class,'index'])
        ->name('infosoft');
    
//});


require __DIR__.'/auth.php';