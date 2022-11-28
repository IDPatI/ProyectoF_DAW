<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use GuzzleHttp\Middleware;
use App\Http\Controllers\UsuarioController;

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

//Route::get('/', HomeController::class)->name('inicio');

Route::get('/', function(){return view('layouts.Inicio');})->name('inicio')->middleware("auth");

//Route::view('inicio', 'InicioConLog')->middleware("auth");



Route::view('Us','Us')->name('nosotros');

Route::get('/inicioConLog',[SessionsController::class,'create'])
->middleware('guest')
->name('inicioConLog');



//iniciarSecion
Route::post('/iniciarSecion',[SessionsController::class,'store'])->name('iniciarSecion');

Route::get('/cerrarSesion',[SessionsController::class,'destroy'])->name('cerrarSecion');

Route::get('/admin',[AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin');




//Crear cuenta
Route::get('/unirse',[UsuarioController::class,'crearCuenta'])
->middleware('guest')
->name('crearCuenta');

Route::post('/unirse',[UsuarioController::class,'create'])->name('crearCuenta');





//Route::view('Admin','Admin')->name('admin');


//Route::view('CrearCuenta','CrearCuenta')->name('crearCuenta');

//Route::view('InicioConLog','InicioConLog')->name('inicioConLog');
