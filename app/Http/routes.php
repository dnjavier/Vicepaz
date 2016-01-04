<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',['as'=>'casa', 'uses'=>'MainController@index']);
Route::get('/mediar',['as'=>'cuestionario', 'uses'=>'MainController@cuestionario']);

	//FUNCIONES BOLETA
	Route::get('/boleta',['as'=>'boleta', 'uses'=>'CasosController@boleta']);
	Route::get('/boleta/all',['as'=>'verboletas', 'uses'=>'CasosController@verboletas']);
	Route::post('/boleta/enviar',['as'=>'crearboleta', 'uses'=>'CasosController@newboleta']);






