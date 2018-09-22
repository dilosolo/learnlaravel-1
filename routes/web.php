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

// kelas
Route::get('kelas','KelasController@index'); //tapi pakai seperti ini
Route::get('kelas/create','KelasController@create');
Route::post('kelas/store', 'KelasController@store');
Route::get('kelas/edit/{id}', 'KelasController@edit');
Route::put('kelas/update/{id}', 'KelasController@update');
Route::delete('kelas/{id}', 'KelasController@destroy');

// siswa
Route::get('siswa','SiswaController@index');
Route::get('siswa/create','SiswaController@create');
Route::post('siswa/store', 'SiswaController@store');
Route::get('siswa/edit/{id}', 'SiswaController@edit');
Route::put('siswa/update/{id}', 'SiswaController@update');
Route::delete('siswa/{id}', 'SiswaController@destroy');
