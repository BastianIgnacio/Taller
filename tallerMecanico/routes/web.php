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
    return view('Main/main');
});


Route::get('/prueba', function () {
    return view('Main/main');
});

Route::get('/mainSecretaria', function () {
    return view('Secretaria/GestionarClientes/mostrarClientes');
});

Route::get('/mainSecretaria', function () {
    return view('Secretaria/GestionarClientes/mostrarClientes');
});