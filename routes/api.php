<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//Mostrar Todos
Route::get('/productos', 'App\Http\Controllers\ProductoController@index');

//Crear Nuevo
Route::post('/productos/crear', 'App\Http\Controllers\ProductoController@store');

//Actualizar
Route::put('/productos/{id}/update', 'App\Http\Controllers\ProductoController@update');

//Eliminar
Route::delete('/productos/{id}/delete', 'App\Http\Controllers\ProductoController@destroy');

//Consultar Productos
Route::get('/productos/{id}/edit', 'App\Http\Controllers\ProductoController@edit');


