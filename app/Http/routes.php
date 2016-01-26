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
Route::get('/preguntas',['as'=>'preguntas', 'uses'=>'MainController@preguntas']);
Route::get('/mapa',['as'=>'mapa', 'uses'=>'MainController@mapa']);
Route::get('/mediar',['as'=>'clasificacion', 'uses'=>'MainController@clasificacion']);
Route::get('/cuestionario',['as'=>'cuestionario', 'uses'=>'MainController@cuestionario']);
Route::get('/formulario',['as'=>'formulario', 'uses'=>'MainController@boleta']);
Route::get('/termina',['as'=>'termina', 'uses'=>'MainController@termina']);
Route::get('/mediadores',['as'=>'mediadores', 'uses'=>'MainController@mediadores']);
Route::post('/check', 'CasosController@validatePartA');

//FUNCIONES BOLETA
Route::group(['prefix'=>'boleta'], function(){
	Route::get('/delete/{number}',['as'=>'verboletas', 'uses'=>'CasosController@softdelete']);
	Route::post('/crear',['as'=>'crearboleta', 'uses'=>'CasosController@crearboleta']);
});
	
	
	

//***************ADMINISTRADORES***********************//
Route::group(['prefix'=>'admin'], function(){
	Route::get('/',['as'=>'adminMain', 'uses'=>'CasosController@boletasInicio']);
});

//***************PROVINCIAS***********************//
Route::group(['prefix'=>'provincia'], function(){
	Route::get('/{id}',['as'=>'findcanton', 'uses'=>'ProvinciasController@findcanton']);
	Route::get('/{idProvincia}/{idCanton}',['as'=>'finddistrito', 'uses'=>'ProvinciasController@finddistrito']);
});




