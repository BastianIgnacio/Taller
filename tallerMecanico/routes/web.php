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

// Rutas de Servicios
Route::get('/add-servicio', 'AddServicioController@index');
Route::get('servicio/{codigo}','ServiciosController@visualizar');

Route::get('/serviciosActivos', 'ServiciosController@serviciosActivos');

//Rutas de Inventario


//Rutas de Tecnicos
Route::get('/gestionar-tecnicos', 'GestionTecnicosController@index');
Route::get('/gestionar-tecnicos/add-tecnico', 'MasterController@addTecnico');
Route::post('/gestionar-tecnicos/add-tecnico', 'addTecnicosController@addTecnico');
Route::post('/gestionar-tecnicos/eliminar-tecnico', 'GestionTecnicosController@eliminarTecnico');
Route::get('/gestionar-tecnicos/editar-tecnico', 'MasterController@editarTecnico');

//Rutas de Proveedores



//Rutas de Clientes

//Rutas de Vehiculos

//Rutas de permisos
Route::get('/gestionar-permisos', 'MasterController@gestionarPermisos');


//Rutas de index
Route::get('/', 'MasterController@dashboard');
Route::get('/dashboard', 'MasterController@dasboard');








Route::get('/gestionar-proveedores/lista-proveedores', 'MasterController@gestionarProveedores');

Route::get('gestionar-proveedores/add-proveedor', 'MasterController@addProveedor');

Route::get('gestionar-inventario/lista-inventario', 'MasterController@gestionarInventario');

Route::get('/gestionar-inventario/add-inventario', 'MasterController@addInventario');

Route::get('/inventario', 'InventarioController@index');

Route::get('/inventario/addExistencia', 'MasterController@addExistencia');

Route::get('/gestionServicios/editarTareas', 'MasterController@editarTareas');


Route::get('/gestionServicios/editarInsumosTarea', 'MasterController@editarInsumosTarea');

Route::get('/gestionarProveedores', 'MasterController@gestionarProveedores');

Route::get('/gestionarProveedores/addProveedor', 'MasterController@addProveedor');

Route::get('/gestionarProveedores/editarProveedor', 'MasterController@editarProveedor');

Route::get('/404', function() {return view('errores.error404');});
Route::get('/403', function() {return view('errores.error403');});
Route::get('/500', function() {return view('errores.error500');});

Route::post('/agregarInsumo','InventarioController@agregarInsumo');
Route::post('/agregarExistencias','InventarioController@agregarExistencias');
Route::get('insumo/{codigo}', 'ApiController@getInsumo');
Route::post('/ajaxPost', 'addServicioController@addServicio');
