<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('foo', function () {
//     return 'Hello World';
// });
// Route::get('nombre/{nombre}',function($nombre){
//   return "mi nombre es ".$nombre;
// });
// Route::get('edad/{edad?}',function($edad=20){
//    return "mi edad es ".$edad;
// });

// route::get('controlador','PruebaController@index');
// route::get('nombre/{nombre}','PruebaController@nombre');

Route::get('/','FrontController@index');
Route::get('contact','FrontController@contacto');
Route::get('reviews','FrontController@reviews');
Route::get('admin','FrontController@admin');

Route::resource('usuario','UsuarioController');
