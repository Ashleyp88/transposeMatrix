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

Route::group(['namespace'=> 'Operation'], function(){
	Route::get('/', 'OperationController@index')->name('operation');
	Route::get('/matrix', 'OperationController@createMatrix')->name('matrix');
	Route::get('/transpose', 'OperationController@transposeMatrix')->name('transpose');
});

