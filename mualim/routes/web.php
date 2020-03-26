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
Route::get('/surah_add', 'SurahController@create');


// Routes for Ayah
Route::get('/ayah', 'AyahController@index');
Route::get('/ayah_add', 'AyahController@create');


// Routes for User
Route::get('/user', 'UserController@index');