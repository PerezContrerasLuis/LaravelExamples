<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('index');
});*/

//ruta de prueba
Route::get('prueba',function(){
	return "Hola esta es una prueba de luis Pérez Contreras";
});

//ruta con parametro
Route::get('prueba/{nombre}',function($nombre){
	return "Hola mi nombre es: ".$nombre;
});

//ruta que enlaza a controlador PruebaController
Route::get('controlador','PruebaController@index');

//ruta que enlaza a controlador PruebaController pasando parametro nombre
Route::get('controlador/{nombre}','PruebaController@printNombre');

//ruta que enlaza a controlador MovieController pero usando resource
Route::resource('movie','MovieController');

Route::get('/','FrontController@index');
Route::get('contacto','FrontController@contacto');
Route::get('reviews','FrontController@reviews');

Route::resource('usuario','UsuarioController');