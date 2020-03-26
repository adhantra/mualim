<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});


// Routes for Surah
Route::get('/surah', 'SurahController@index');
Route::get('/surah/add', 'SurahController@create');
Route::post('/surah/store', 'SurahController@store');
Route::get('/surah/edit/{id}', 'SurahController@edit');
Route::put('/surah/update/{id}', 'SurahController@update');
Route::get('/surah/delete/{id}', 'SurahController@destroy');


// Routes for Ayah
Route::get('/ayah', 'AyahController@index');
Route::get('/ayah/add', 'AyahController@create');
Route::post('/ayah/store', 'AyahController@store');


// Routes for User
Route::get('/user', 'UserController@index');