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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/test',function(Request $request){

    dd(Hash::make('123'));
});

# Route::get('/medicos','MedicoController@index')->name('medicos.index');
# Route::post('/medico/create','MedicoController@store')->name('medicos.store');
# Route::post('/medico/destroy','MedicoController@destroy')->name('medicos.destroy');
# Route::get('/medico/{id}/show','MedicoController@show')->name('medicos.show');
# Route::get('/medico/create','MedicoController@create')->name('medicos.create');
# Route::patch('/medico/{id}/update','MedicoController@update')->name('medicos.update');
# Route::get('/medico/{id}/edit','MedicoController@edit')->name('medicos.edit');
# Route::delete('/medico/{id}/destroy','MedicoController@destroy')->name('medicos.destroy');

Route::resource('medicos', 'MedicoController');

Route::resource('consultorios', 'ConsultorioController');

Route::resource('empleados', 'EmpleadoController');

Route::resource('sueldos', 'SueldoController');

Route::resource('rentas', 'RentaController');

Route::resource('eventos', 'EventoController');

Route::resource('consultas', 'ConsultaController');

Route::resource('certificados', 'CertificadoController');

Route::resource('centroMedicos', 'CentroMedicoController');

// Auth::routes();

// Route::get('/home', 'HomeController@index');