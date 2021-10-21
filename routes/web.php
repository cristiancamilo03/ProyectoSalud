<?php

use App\Http\Controllers\Auth\LoginController;
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

Route::get('plantilla', function () {
    return view ('plantilla.index');
});

Route::get('contactenos', function () {
    return view ('plantilla.contact');
});

Route::get('acerca-nosotros', function () {
    return view ('plantilla.about-us');
});

Route::resource('Lector', 'lectorImagenesController');

Route::get('login' , 'inicioController@form');

Route::post('login' , 'inicioController@login')->name('login.verify');

Route::get('logout', 'inicioController@logout')->name('logout');

Route::get('pdf/{idHistorial}' , 'PDFSalud@pdf');