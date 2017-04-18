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
    return view('app');
});


//api routes
Route::get('/songs', 'SongController@index');
Route::post('/songs', 'SongController@create');
Route::get('/songs/{id}', 'SongController@show');
Route::put('/songs/{id}', 'SongController@update');
Route::delete('/songs/{id}', 'SongController@destroy');
