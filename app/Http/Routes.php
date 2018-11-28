<?php

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
use Illuminate\Support\Facades\Hash;

Route::resource('consultorios', 'ConsultorioController');

Route::resource('empleados', 'EmpleadoController');

Route::resource('sueldos', 'SueldoController');

Route::resource('rentas', 'RentaController');

Route::resource('eventos', 'EventoController');

Route::resource('consultas', 'ConsultaController');

Route::resource('certificados', 'CertificadoController');

Route::resource('certificados', 'CertificadoController');

Route::resource('centroMedicos', 'CentroMedicoController');

Route::resource('centroMedicos', 'CentroMedicoController');