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
Route::get('/cine','claseEjercicioController@ejercicio1');
Route::post('/cine','claseEjercicioController@procesar1');

Route::get('/gaseosa','PrimerEjercicioVistaController@DevuelveLaVista');
Route::post('/gaseosa','PrimerEjercicioVistaController@Respuesta');

Route::get('/hotel','SegundoEjercicioController@Vista');
Route::post('/hotel','SegundoEjercicioController@EntregaDatos');