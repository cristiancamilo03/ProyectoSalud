<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PDFPrueba;
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

Route::get('prueba', function () {
    return view('prueba');
});



Route::resource('datos' , 'DatController');

Route::resource('historial', 'historialController')->middleware('estado');

Route::resource('registrarse', 'registrarseController');

Route::get('first', function () {
    return view('plantilla.index');
});

Route::get('Perfil', function () {
    return view ('inicioSesion.actualizarPefil');
});
Route::get('prueba', function () {
    return view ('historial.prueba');
});
Route::resource('perfil', 'actualizarController');

Route::resource('informes', 'informeController');

Route::resource('Lector', 'lectorImagenesController');

Route::get('login' , 'inicioController@form');

Route::post('login' , 'inicioController@login')->name('login.verify');

Route::get('logout', 'inicioController@logout')->name('logout');

Route::get('pdf' , 'plantillaPDF@pdf');


Route::get('pruebas', function () {
    return view ('pdf.index');
});