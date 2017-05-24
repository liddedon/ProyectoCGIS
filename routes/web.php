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
    return view('welcome');
});

Route::get('/registerCliente', function () {
    return view('auth.registerCliente');
});


Route::resource('users', 'UserController');
Route::resource('clientes', 'ClienteController');
Route::resource('entrenadorpersonals', 'EntrenadorpersonalController');
Route::resource('dietas', 'DietaController');
Route::resource('entrenamientos', 'EntrenamientoController');
Route::resource('ejercicios', 'EjerciciosController');


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('cliente', 'ClienteController@index')->name('cliente.index');
Route::get('dieta', 'DietaController@store')->name('dieta.store');
