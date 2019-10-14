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

Route::get('/gestionar-tecnicos', 'MasterController@gestionarTecnicos');

Route::get('/gestionar-tecnicos/add-tecnico', 'MasterController@addTecnico');

Route::get('/gestionar-tecnicos/editar-tecnico', 'MasterController@editarTecnico');

Route::get('/gestionar-proveedores/lista-proveedores', 'MasterController@gestionarProveedores');

Route::get('gestionar-proveedores/add-proveedor', 'MasterController@addProveedor');

Route::get('gestionar-inventario/lista-inventario', 'MasterController@gestionarInventario');

Route::get('/gestionar-inventario/add-inventario', 'MasterController@addInventario');

Route::get('/inventario', 'MasterController@inventario');

Route::get('/inventario/addExistencia', 'MasterController@addExistencia');

Route::get('/gestionServicios/editarTareas', 'MasterController@editarTareas');

Route::get('/gestionServicios/editarInsumosTarea', 'MasterController@editarInsumosTarea');

Route::get('/gestionarProveedores', 'MasterController@gestionarProveedores');

Route::get('/gestionarProveedores/addProveedor', 'MasterController@addProveedor');

Route::get('/gestionarProveedores/editarProveedor', 'MasterController@editarProveedor');
