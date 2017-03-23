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


Route::resource('User', 'UserController');
Route::resource('Cliente', 'ClienteController');
Route::resource('EntrenadorPersonal', 'EntrenadorPersonalController');
Route::resource('Dieta', 'DietaController');
Route::resource('Entrenamiento', 'EntrenamientoController');
