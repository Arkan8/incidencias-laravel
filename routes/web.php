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

use App\User;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('incidencias', 'UserController@incidencias')->name('incidencias');
Route::get('usuarios', 'UserController@usuarios')->name('usuarios');
Route::get('mensajes', 'UserController@mensajes')->name('mensajes');
Route::get('logs', 'UserController@logs')->name('logs');

Route::post('guardar', 'UserController@guardar');

Route::get('eliminar/{id}', 'UserController@eliminar');
Route::get('detalle/{id}', 'UserController@detalle');
Route::get('ver/{id}', 'UserController@ver');
Route::get('eliminar-user/{id}', 'UserController@eliminarUser');

Route::get('editar/{id}', 'UserController@editar');
Route::get('editarUser/{id}', 'UserController@editarUser');
Route::post('actualizar', 'UserController@actualizar');
Route::post('actualizarUser', 'UserController@actualizarUser');

