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

Route::get('prueba_laravel/productos', 'PruebaController@index');
Route::post('prueba_laravel/productos', 'PruebaController@create');

Route::get('prueba_laravel/Mostrar', 'PruebaController@show_all');

Route::get('/', function () {
    return view('welcome');
});
