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
Route::GET('/ramas', 'ServiciosController@listarRamas')->name('listarRamas');
Route::POST('/agregar', 'ServiciosController@guardarServicios')->name('guardarServicios');
Route::GET('/getServicesData','ServiciosController@getServicesData');
