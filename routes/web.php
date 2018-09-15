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




Route::view('/','home');
Route::view('/home','home');

Route::view('testing-extend','content');
// Route::view('/kelas','template'); //sudah tidak pakai ini

Route::get('kelas','KelasController@index'); //tapi pakai seperti ini
Route::get('kelas/create','KelasController@create');
Route::post('kelas/store', 'KelasController@store');
Route::get('kelas/edit/{id}', 'KelasController@edit');
