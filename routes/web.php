<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;

use App\Http\Controllers\AdminController as ControllersAdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
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
Route::get('/inicio', function ()
{return view('inicio');
});
Route::get('/nuevo', function ()
{return view('nuevo');
});
Route::get('/certificado', function ()
{return view('certificado');
});
Route::get('/solicitud', function ()
{return view('solicitud');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user', [App\Http\Controllers\HomeController::class, 'User'])->name('user');

//rutas para registros
Route::get('/home/create', [App\Http\Controllers\RegistroController::class, 'create']);
Route::post('/home/create', [App\Http\Controllers\RegistroController::class, 'store'])->name('registro.store');
Route::get('/home/index',[App\Http\Controllers\RegistroController::class, 'index'])->name('registro.index');
Route::get('/home/{registro}/edit',[App\Http\Controllers\RegistroController::class, 'edit'])->name('registro.edit');
Route::put('/home/{registro}/edit',[App\Http\Controllers\RegistroController::class, 'update'])->name('registro.update');
Route::delete('/home/{registro}/edit',[App\Http\Controllers\RegistroController::class, 'destroy'])->name('registro.delete');
//rutas para libros
Route::get('/home/libros/create', [App\Http\Controllers\LibroController::class, 'create'])->name('libro.create');
Route::post('/home/libros/create', [App\Http\Controllers\LibroController::class, 'store'])->name('libro.store');
Route::get('/home/libros/index',[App\Http\Controllers\LibroController::class, 'index'])->name('libro.index');
Route::get('home/libros/show/{libro}',[App\Http\Controllers\LibroController::class, 'show'])->name('libros.show');
Route::get('/home/edit/{libro}',[App\Http\Controllers\LibroController::class, 'edit'])->name('libros.edit');
Route::put('/home/edit/{libro}',[App\Http\Controllers\LibroController::class, 'update'])->name('libros.update');
Route::delete('/home/edit/{libro}',[App\Http\Controllers\LibroController::class, 'destroy'])->name('libros.delete');