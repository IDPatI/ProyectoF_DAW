<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use GuzzleHttp\Middleware;

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

Route::get('/', function(){
    return view('Home');
})->name('inicio')
->middleware('auth');


Route::get('/inicioConLog',[SessionsController::class,'create'])
->middleware('guest')
->name('inicioConLog');


Route::post('/inicioConLog',[SessionsController::class,'store'])->name('inicioConLog');

Route::get('/cerrarSesion',[SessionsController::class,'destroy'])->name('inicioConLog.destroy');

Route::get('/admin',[AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin');


Route::get('/crearCuenta',[RegisterController::class,'create'])
->middleware('guest')
->name('crearCuenta');

Route::post('/crearCuenta',[RegisterController::class,'store'])->name('crearCuenta');

Route::view('Us','Us')->name('nosotros');



//Route::view('Admin','Admin')->name('admin');


//Route::view('CrearCuenta','CrearCuenta')->name('crearCuenta');

//Route::view('InicioConLog','InicioConLog')->name('inicioConLog');
