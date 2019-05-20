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

//route of the app
Route::group(['namespace'=> 'Operation'], function(){
	//for gettin the index app
	Route::get('/', 'OperationController@index')->name('operation');
	//route to construct the matrix
	Route::get('/matrix', 'OperationController@createMatrix')->name('matrix');
	//route to transpose the matrix
	Route::get('/transpose', 'OperationController@transposeMatrix')->name('transpose');
	//route to get the final view
	route::get('/result', 'OperationController@resultOperation')->name('result');
});

