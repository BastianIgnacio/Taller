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
    return view('gestionarProveedores/editarProveedor');
});

Route::get('/add-servicio', function () {
    return view('addServicio/addServicio');
});

Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
});

Route::get('/gestionar-permisos', function () {
    return view('gestionarPermisos/gestionarPermisos');
});

Route::get('/gestionar-tecnicos', function () {
    return view('gestionarTecnicos/gestionarTecnicos');
});

Route::get('/gestionar-tecnicos/add-tecnico', function () {
    return view('gestionarTecnicos/addTecnico');
});

Route::get('/gestionar-tecnicos/editar-tecnico', function () {
    return view('gestionarTecnicos/editarTecnico');
});

