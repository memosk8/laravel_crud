<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// had to specify the whole route for the controller 
Route::resource('almacen', 'App\Http\Controllers\AlmacenController');
Route::resource('productos', 'App\Http\Controllers\ProductoController');
Route::resource('ventas', 'App\Http\Controllers\VentaController');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
