<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerUsuario;



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
Route::get('/politicas', function ()
{return view('politicas');
});
Route::get('/politicas', function ()
{return view('politicas');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user', [App\Http\Controllers\HomeController::class, 'User'])->name('user');
Route::post('/user', [App\Http\Controllers\HomeController::class, 'User'])->name('user');


