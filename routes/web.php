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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Modulo Servicios-Examen
Route::GET('/servicios', 'ServiciosController@index')->name('servicios');
Route::GET('/servicios/{id_examen}', 'ServiciosController@show')->name('servicios.show');
Route::GET('servicios/edit/{id_examen}', 'ServiciosController@editForm')->name('servicios.editForm');
Route::PUT('servicios/edit/{id_examen}', 'ServiciosController@edit')->name('servicios.edit');
Route::POST('servicios/agregar', 'ServiciosController@guardarServicios')->name('guardarServicios');
Route::delete('servicios/delete/{id_examen}','ServiciosController@eliminarServicios')->name('servicios.eliminar');

//Route::GET('/ramas', 'ServiciosController@listarRamas')->name('listarRamas');
Route::GET('/getServicesData','ServiciosController@getServicesData');


//Modulo Médico
Route::GET('/medicos', 'MedicoController@index')->name('medico.index');
Route::POST('/medicos/store', 'MedicoController@store')->name('medico.store');
Route::GET('/medicos/{id_medico}', 'MedicoController@show')->name('medico.show');
Route::GET('/medicos/edit/{id_medico}', 'MedicoController@edit')->name('medico.edit');
Route::PUT('/medicos/edit/{id_medico}', 'MedicoController@update')->name('medico.update');
Route::DELETE('/medicos/delete/{id_medico}', 'MedicoController@delete')->name('medico.delete');

