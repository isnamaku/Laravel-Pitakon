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

Route::get('/', function () {
    return view('layouts/erd');
});
Route::get('/master', function(){
    return view('layouts/master');
});

Route::get('/pertanyaan/form', 'pertanyaanController@create'); // menampilkan pertanyaan
Route::post('/pertanyaan/store', 'pertanyaanController@store'); // membuat pertanyaan baru
Route::get('/pertanyaan', 'pertanyaanController@index'); // menyimpan data
// Route::get('/pertanyaan/create', 'pertanyaanController@create'); // membuat pertanyaan baru
Route::get('/pertanyaan/{id}', 'PertanyaanController@show'); // menampilkan detail item dengan id 
Route::get('/pertanyaan/{id}/edit', 'pertanyaanController@edit'); // menampilkan form untuk edit item
Route::put('/pertanyaan/{id}', 'pertanyaanController@update'); // menyimpan perubahan dari form edit
Route::delete('/pertanyaan/{id}', 'pertanyaanController@destroy'); // menghapus data dengan id

//Route::get('/pertanyaan', 'pertanyaanController@showPertanyaan');  menampilkan pertanyaan
Route::get('/pertanyaan/{id}/edit', 'pertanyaanController@edit'); // menampilkan form untuk edit item
Route::get('/items/create', 'ItemController@create'); // menampilkan pertanyaan
Route::post('/items', 'ItemController@store'); // menyimpan data
Route::get('/items', 'ItemController@index'); // menampilkan semua
Route::get('/items/{id}', 'ItemController@show'); // menampilkan detail item dengan id 
Route::get('/items/{id}/edit', 'ItemController@edit'); // menampilkan form untuk edit item
Route::put('/items/{id}', 'ItemController@update'); // menyimpan perubahan dari form edit
Route::delete('/items/{id}', 'ItemController@destroy'); // menghapus data dengan id