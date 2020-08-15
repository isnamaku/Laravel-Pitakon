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
Route::get('/welcome', function () {
    return view('layouts/welcome');
});
Route::get('/master', function(){
    return view('layouts/master');
});



Route::get('/pertanyaan/form', 'pertanyaanController@create'); // menampilkan pertanyaan
Route::post('/pertanyaan/store', 'pertanyaanController@store'); // membuat pertanyaan baru
Route::get('/pertanyaan', 'pertanyaanController@index'); // menyimpan data
// Route::get('/pertanyaan/create', 'pertanyaanController@create'); // membuat pertanyaan baru
Route::get('/pertanyaan/{id}/view', 'PertanyaanController@showDetailsJawaban'); // menampilkan detail item dengan id 
Route::get('/pertanyaan/{id}/edit', 'pertanyaanController@edit'); // menampilkan form untuk edit item
Route::put('/pertanyaan/{id}', 'pertanyaanController@update'); // menyimpan perubahan dari form edit
Route::delete('/pertanyaan/{id}', 'pertanyaanController@destroy'); // menghapus data dengan id


//login


Route::get('/login','AuthNativeController@index');
Route::get('/login/auth','AuthNativeController@auth');
Route::get('/register','AuthNativeController@indexRegister');
Route::get('/register/create','AuthNativeController@createAccount');
