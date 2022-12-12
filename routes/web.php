<?php

use App\Http\Controllers\AdminSoftwareController;
use App\Http\Controllers\AdminEspecificacionEquipoController;
use App\Http\Controllers\AdminEspecificacionSoftwareController;
use App\Http\Controllers\AdminTipoEquipoController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\TipoEquipoController;
use App\Http\Controllers\UserTipoEquipoController;
use App\Http\Controllers\SoftwareController;
use App\Http\Controllers\AdminUsoEquipoController;
use App\Http\Controllers\InfoSoftwareController;
use App\Http\Controllers\SolicitudDetalleController;
use App\Http\Controllers\AdminReporteController;
use App\Http\Controllers\AdminSolicitudController;
use App\Http\Controllers\NotificacionController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UserController;

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

         Route::controller(AdminTipoEquipoController::class)->group(function () {
            Route::get('/superadmin/tipoequipos','index')->name('s.tipoequipos.index');
            Route::get('/superadmin/tipoequipos/create','create')->name('s.tipoequipos.create');
            Route::post('/superadmin/tipoequipos/store','store')->name('s.tipoequipos.store');
            Route::get('/superadmin/tipoequipos/edit/{id}','edit')->name('s.tipoequipos.edit');
            Route::put('/superadmin/tipoequipos/update/{id}','update')->name('s.tipoequipos.update');
            Route::delete('/superadmin/tipoequipos/{id}','destroy')->name('s.tipoequipos.destroy');
      });
  
      Route::controller(AdminSoftwareController::class)->group(function () {
          Route::get('/superadmin/softwares','index')->name('s.softwares.index');
          Route::get('/superadmin/softwares/create','create')->name('s.softwares.create');
          Route::post('/superadmin/softwares/store','store')->name('s.softwares.store');
          Route::get('/superadmin/softwares/edit/{id}','edit')->name('s.softwares.edit');
          Route::put('/superadmin/softwares/update/{id}','update')->name('s.softwares.update');
          Route::delete('/superadmin/softwares/{id}','destroy')->name('s.softwares.destroy');
      });

      Route::controller(AdminEspecificacionEquipoController::class)->group(function () {
        Route::get('/superadmin/especificacionequipo','index')->name('s.especificacionequipo.index');
        Route::get('/superadmin/especificacionequipo/create','create')->name('s.especificacionequipo.create');
        Route::post('/superadmin/especificacionequipo/store','store')->name('s.especificacionequipo.store');
        Route::get('/superadmin/especificacionequipo/edit/{id}','edit')->name('s.especificacionequipo.edit');
        Route::put('/superadmin/especificacionequipo/update/{id}','update')->name('s.especificacionequipo.update');
        Route::delete('/superadmin/especificacionequipo/{id}','destroy')->name('s.especificacionequipo.destroy');
    });
  
      Route::controller(AdminEspecificacionSoftwareController::class)->group(function () {
          Route::get('/superadmin/especificacionsoftware','index')->name('s.especificacionsoftware.index');
          Route::get('/superadmin/especificacionsoftware/create','create')->name('s.especificacionsoftware.create');
          Route::post('/superadmin/especificacionsoftware/store','store')->name('s.especificacionsoftware.store');
          Route::get('/superadmin/especificacionsoftware/edit/{id}','edit')->name('s.especificacionsoftware.edit');
          Route::put('/superadmin/especificacionsoftware/update/{id}','update')->name('s.especificacionsoftware.update');
          Route::delete('/superadmin/especificacionsoftware/{id}','destroy')->name('s.especificacionsoftware.destroy');
      });
  
  //     Route::get('/superadmin/usoequipos', [AdminUsoEquipoController::class,'index'])
  //          ->name('d.usoequipos');
       Route::controller(AdminUsoEquipoController::class)->group(function () {
            Route::get('/superadmin/usoequipos','index')->name('s.usoequipos.index');
            Route::get('/superadmin/usoequipos/create','create')->name('s.usoequipos.create');
            Route::post('/superadmin/usoequipos/store','store')->name('s.usoequipos.store');
            Route::get('/superadmin/usoequipos/edit','edit')->name('s.usoequipos.edit');
            Route::put('/superadmin/usoequipos/edit','update')->name('s.usoequipos.update');
            Route::delete('/superadmin/usoequipos/{id}','destroy')->name('s.usoequipos.destroy');
       });
  
       Route::controller(UserController::class)->group(function (){
        Route::get('/superadmin/Usuario','index')->name('s.Usuarios.index');
        Route::get('/superadmin/Usuario/create','create')->name('s.Usuarios.create');
        Route::post('/superadmin/Usuario/store','store')->name('s.Usuarios.store');
        Route::get('/superadmin/Usuario/edit/{id}','edit')->name('s.Usuarios.edit');
        Route::put('/superadmin/Usuario/update/{id}','update')->name('s.Usuarios.update');
        Route::delete('/superadmin/Usuario/{id}','destroy')->name('s.Usuarios.destroy');
        //Route::get('/superadmin/Usuario/getRol','getRol');
        });

        Route::controller(RolController::class)->group(function (){
            Route::get('/dashboard/roles','index')->name('s.roles.index');
            Route::get('/dashboard/roles/create','create')->name('s.roles.create');
            Route::post('/dashboard/roles/store','store')->name('s.roles.store');
            Route::get('/dashboard/roles/edit/{id}','edit')->name('s.roles.edit');
            Route::put('/dashboard/roles/update/{id}','update')->name('s.roles.update');
            Route::delete('/dashboard/roles/{id}','destroy')->name('s.roles.destroy');
        });
        Route::controller(OficinaController::class)->group(function (){
            Route::get('/dashboard/oficinas','index')->name('s.oficinas.index');
            Route::get('/dashboard/oficinas/create','create')->name('s.oficinas.create');
            Route::post('/dashboard/oficinas/store','store')->name('s.oficinas.store');
            Route::get('/dashboard/oficinas/edit/{id}','edit')->name('s.oficinas.edit');
            Route::put('/dashboard/oficinas/update/{id}','update')->name('s.oficinas.update');
            Route::delete('/dashboard/oficinas/{id}','destroy')->name('s.oficinas.destroy');
        });
        Route::controller(UserController::class)->group(function (){
            Route::get('/dashboard/usuarios','index')->name('s.usuarios.index');
            Route::get('/dashboard/usuarios/create','create')->name('s.usuarios.create');
            Route::post('/dashboard/usuarios/store','store')->name('s.usuarios.store');
            Route::get('/dashboard/usuarios/edit/{id}','edit')->name('s.usuarios.edit');
            Route::put('/dashboard/usuarios/update/{id}','update')->name('s.usuarios.update');
            Route::delete('/dashboard/usuarios/{id}','destroy')->name('s.usuarios.destroy');
        });

        Route::controller(AdminSoftwareController::class)->group(function () {
            Route::get('/dashboard/softwares','index')->name('s.softwares.index');
            Route::get('/dashboard/softwares/create','create')->name('s.softwares.create');
            Route::post('/dashboard/softwares/store','store')->name('s.softwares.store');
            Route::get('/dashboard/softwares/edit/{id}','edit')->name('s.softwares.edit');
            Route::put('/dashboard/softwares/update/{id}','update')->name('s.softwares.update');
            Route::delete('/dashboard/softwares/{id}','destroy')->name('s.softwares.destroy');
        });
    
        Route::controller(AdminEspecificacionSoftwareController::class)->group(function () {
            Route::get('/dashboard/especificacionsoftware','index')->name('s.especificacionsoftware.index');
            Route::get('/dashboard/especificacionsoftware/create','create')->name('s.especificacionsoftware.create');
            Route::post('/dashboard/especificacionsoftware/store','store')->name('s.especificacionsoftware.store');
            Route::get('/dashboard/especificacionsoftware/edit/{id}','edit')->name('s.especificacionsoftware.edit');
            Route::put('/dashboard/especificacionsoftware/update/{id}','update')->name('s.especificacionsoftware.update');
            Route::delete('/dashboard/especificacionsoftware/{id}','destroy')->name('s.especificacionsoftware.destroy');
        });
  
      Route::get('/superadmin/reportes', [AdminReporteController::class,'index'])
           ->name('s.reportes');

});

//RUTAS SOLO ADMIN
Route::middleware(['auth', 'verified','soloadmin'])->group(function () {
     Route::get('/dashboard', function () {
         return Inertia::render('Admin/Admin');
     })->name('admin');

     //EQUIPOS
    Route::controller(AdminTipoEquipoController::class)->group(function () {
          Route::get('/equipo/tipoequipos','index')->name('d.tipoequipos.index');
          Route::get('/equipo/tipoequipos/create','create')->name('d.tipoequipos.create');
          Route::post('/equipo/tipoequipos/store','store')->name('d.tipoequipos.store');
          Route::get('/equipo/tipoequipos/edit/{id}','edit')->name('d.tipoequipos.edit');
          Route::put('/equipo/tipoequipos/update/{id}','update')->name('d.tipoequipos.update');
          Route::delete('/equipo/tipoequipos/{id}','destroy')->name('d.tipoequipos.destroy');
    });

    Route::controller(AdminUsoEquipoController::class)->group(function () {
          Route::get('/dashboard/usoequipos','index')->name('d.usoequipos.index');
          Route::get('/dashboard/usoequipos/create','create')->name('d.usoequipos.create');
          Route::post('/dashboard/usoequipos/store','store')->name('d.usoequipos.store');
          Route::get('/dashboard/usoequipos/edit/{id}','edit')->name('d.usoequipos.edit');
          Route::put('/dashboard/usoequipos/update/{id}','update')->name('d.usoequipos.update');
          Route::delete('/dashboard/usoequipos/{id}','destroy')->name('d.usoequipos.destroy');
     });

     Route::controller(AdminEspecificacionEquipoController::class)->group(function () {
          Route::get('/dashboard/especificacionequipo','index')->name('d.especificacionequipo.index');
          Route::get('/dashboard/especificacionequipo/create','create')->name('d.especificacionequipo.create');
          Route::post('/dashboard/especificacionequipo/store','store')->name('d.especificacionequipo.store');
          Route::get('/dashboard/especificacionequipo/edit/{id}','edit')->name('d.especificacionequipo.edit');
          Route::put('/dashboard/especificacionequipo/update/{id}','update')->name('d.especificacionequipo.update');
          Route::delete('/dashboard/especificacionequipo/{id}','destroy')->name('d.especificacionequipo.destroy');
      });

      //SOFTWARE
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

     Route::controller(AdminEspecificacionEquipoController::class)->group(function (){
          Route::get('/dashboard/especificacionequipo','index')->name('d.especificacionequipo.index');
          Route::get('/dashboard/especificacionequipo/create','create')->name('d.especificacionequipo.create');
          Route::post('/dashboard/especificacionequipo/store','store')->name('d.especificacionequipo.store');
          Route::get('/dashboard/especificacionequipo/edit/{id}','edit')->name('d.especificacionequipo.edit');
          Route::put('/dashboard/especificacionequipo/update/{id}','update')->name('d.especificacionequipo.update');
          Route::delete('/dashboard/especificacionequipo/{id}','destroy')->name('d.especificacionequipo.destroy');
     });
     
    Route::controller(RolController::class)->group(function (){
        Route::get('/dashboard/roles','index')->name('d.roles.index');
        Route::get('/dashboard/roles/create','create')->name('d.roles.create');
        Route::post('/dashboard/roles/store','store')->name('d.roles.store');
        Route::get('/dashboard/roles/edit/{id}','edit')->name('d.roles.edit');
        Route::put('/dashboard/roles/update/{id}','update')->name('d.roles.update');
        Route::delete('/dashboard/roles/{id}','destroy')->name('d.roles.destroy');
    });
    Route::controller(OficinaController::class)->group(function (){
        Route::get('/dashboard/oficinas','index')->name('d.oficinas.index');
        Route::get('/dashboard/oficinas/create','create')->name('d.oficinas.create');
        Route::post('/dashboard/oficinas/store','store')->name('d.oficinas.store');
        Route::get('/dashboard/oficinas/edit/{id}','edit')->name('d.oficinas.edit');
        Route::put('/dashboard/oficinas/update/{id}','update')->name('d.oficinas.update');
        Route::delete('/dashboard/oficinas/{id}','destroy')->name('d.oficinas.destroy');
    });
    Route::controller(UserController::class)->group(function (){
        Route::get('/dashboard/usuarios','index')->name('d.usuarios.index');
        Route::get('/dashboard/usuarios/create','create')->name('d.usuarios.create');
        Route::post('/dashboard/usuarios/store','store')->name('d.usuarios.store');
        Route::get('/dashboard/usuarios/edit/{id}','edit')->name('d.usuarios.edit');
        Route::put('/dashboard/usuarios/update/{id}','update')->name('d.usuarios.update');
        Route::delete('/dashboard/usuarios/{id}','destroy')->name('d.usuarios.destroy');
    });

//     Route::get('/dashboard/especificacionequipo', [AdminEspecificacionEquipoController::class,'index'])
//          ->name('d.especificacionequipo');
    
//     Route::get('/dashboard/softwares', [AdminSoftwareController::class,'index'])
//          ->name('d.softwares');

//     Route::get('/dashboard/especificacionsoftware', [AdminEspecificacionSoftwareController::class,'index'])
//          ->name('d.especificacionsoftware');

    Route::get('/dashboard/reportes', [AdminReporteController::class,'index'])
         ->name('d.reportes');

    Route::get('/dashboard/solicitudes', [AdminSolicitudController::class,'index'])
         ->name('d.solicituds');

});

//RUTAS SOLO USER
Route::middleware(['auth', 'verified','solouser'])->group(function () {

    Route::get('/inicio', [TipoEquipoController::class,'index'])
        ->name('user'); 
 
    Route::get('/inicio/{id}',[TipoEquipoController::class,'show'])
        ->name('inicio.show');

    Route::get('/solicitud', [SoftwareController::class,'index'])
        ->name('solicitud');

    Route::get('/infosoft', [InfoSoftwareController::class,'index'])
        ->name('infosoft');
    
    Route::controller(UserTipoEquipoController::class)->group(function () {
        Route::get('/user/equipos','index')->name('d.userequipos.index');
        Route::get('/user/equipos/create','create')->name('d.userequipos.create');
        Route::post('/user/equipos/store','store')->name('d.userequipos.store');
    });
    
});

Route::controller(NotificacionController::class)->group(function (){
     Route::get('/notificaciones','index')->name('notificaciones.index');
     Route::get('/acceso','create')->name('notificaciones.create');
     Route::post('/notificaciones/store','store')->name('notificaciones.store');
     //Route::post('/notificaciones/show','show')->name('notificaciones.show');
     Route::delete('/notificaciones/{id}','destroy')->name('notificaciones.destroy');
});

// Route::group([
//     'prefix' => 'Usuario'
// ], function($router){
//     Route::get('create',[RolController::class,'getRol']);
// });

require __DIR__.'/auth.php';