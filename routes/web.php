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

Route::get('/','ClientController@index')->name('client.index');
Route::get('add', 'ClientController@create')->name('client.Add');
Route::post('ajoute', 'ClientController@store')->name('client.store');
Route::get('affiches/{id}','ClientController@show')->name('client.show');
Route::get('affiches/{client}/edit', 'ClientController@edit');
Route::PATCH('modifier/{id}', 'ClientController@update');
Route::delete('supprime/{id}','ClientController@destroy')->name('client.del');
