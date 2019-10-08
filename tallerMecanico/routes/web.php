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

Route::get('/', 'MasterController@dashboard');

Route::get('/add-servicio', 'MasterController@addServicio');

Route::get('/dashboard', 'MasterController@dasboard');

Route::get('/gestionar-permisos', 'MasterController@gestionarPermisos');

Route::get('/gestionar-tecnicos', 'GestionTecnicosController@index');

Route::get('/gestionar-tecnicos/add-tecnico', 'MasterController@addTecnico');
Route::post('/gestionar-tecnicos/add-tecnico', 'addTecnicosController@addTecnico');


Route::get('/gestionar-tecnicos/editar-tecnico', 'MasterController@editarTecnico');

Route::get('/inventario', 'MasterController@inventario');

Route::get('/inventario/addExistencia', 'MasterController@addExistencia');

Route::get('/gestionServicios/editarTareas', 'MasterController@editarTareas');

Route::get('/gestionServicios/editarInsumosTarea', 'MasterController@editarInsumosTarea');
