<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
//haaa
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); 

require __DIR__.'/auth.php';


//Ejemplo1
Route::get('/texto',function(){
    return '<h1>Esto es un texto de prueba</h1>';
    
});

//Ejemplo2 - con array
Route::get('/arreglo',function(){
    $arreglo=[
        'ID'=>'1',
        'Descripcion'=>'Producto 1'
    ];
    return $arreglo;
});
//Ejemplo 3 - con parametros
//Ejemplo1
Route::get('/nombre/{nombre}',function($nombre){
    return '<h1>El nombre es: '.$nombre.'</h1>';
    
});

Route::get('/cliente/{cliente?}',function($cliente='Cliente General'){
    return '<h1>El cliente es: '.$cliente.'</h1>';
    
});

//Ejemplo 5
Route::get('/ruta1',function(){
    return '<h1>Esta es la vista de la ruta 1</h1>';

})->name('Ruta1');

Route::get('/ruta2',function(){
    //return '<h1>Esta es la vista de la ruta 2</h1>';
    return redirect()->route('Ruta1');
});


//ejemplo 6
Route::get('/usuario/{usuario}',function($usuario){
    return '<h1>El usuario es: '.$usuario.'</h1>';
    
})->where('usuario','[0-9]+');
//where('usuario','[A-Za-z]+');