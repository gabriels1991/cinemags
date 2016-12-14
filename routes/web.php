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
    return view('welcome');
});
*/

Route::resource('mail','MailController');

Route::resource('movie','MovieController');


Route::get('/','FrontController@index');

Route::get('/contacto','FrontController@contacto');

Route::get('/reviews','FrontController@reviews');

Route::get('/admin','FrontController@admin');

Route::resource('log','LogController');

Route::get('/logout','LogController@logout');










Route::resource('usuario','UsuarioController');

Route::resource('genero','GeneroController');

Route::get('generos','GeneroController@listing');
