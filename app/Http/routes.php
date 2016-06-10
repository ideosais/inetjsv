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


Route::group(['middelware' => 'web'], function() {

    Route::auth();

    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('/auth/list', 'UsuariosController@index');
    Route::post('/auth/list/post', 'UsuariosController@inline_update');

    Route::resource('empresa','EmpresasController');
    Route::resource('delegacion','DelegacionesController');
    Route::resource('/auth/list','UsuariosController');


    Route::get('/activo/buscar','ActivosController@listar');
    Route::resource('activo','ActivosController');

});



