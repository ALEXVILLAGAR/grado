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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('acudientes', 'AcudienteController@mayores')->name('acudientes');
Route::get('acudiente/{mayor}', 'AcudienteController@listaAcudientes')->name('lista');
Route::get('visitas/{id}', 'VisitasController@listaVisitas')->name('visitas');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('users','UserController');
Route::resource('auxiliar','AuxiliarController');
Route::resource('routes','RouteController');
Route::resource('persona','PersonController');
Route::resource('mayor','MayorController');
Route::resource('acudiente','AcudienteController');
Route::resource('actividad','ActividadController');
Route::resource('planes','PlanController');
Route::resource('medicamento','MedicamentoController');
Route::resource('visitas','VisitasController');