<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;

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

// Routes for Home
Route::get('/', 'HomeController@index');

// Routes for Surah
Route::get('/surah', 'SurahController@index');
Route::get('/surah/find', 'SurahController@find');
Route::get('/surah/add', 'SurahController@create');
Route::post('/surah/store', 'SurahController@store');
Route::get('/surah/edit/{id}', 'SurahController@edit');
Route::put('/surah/update/{id}', 'SurahController@update');
Route::get('/surah/delete/{id}', 'SurahController@destroy');


// Routes for Ayah
Route::get('/ayah', 'AyahController@index');
Route::get('/ayah/find', 'AyahController@find');
Route::get('/ayah/add', 'AyahController@create');
Route::post('/ayah/store', 'AyahController@store');
Route::get('/ayah/edit/{id}', 'AyahController@edit');
Route::put('/ayah/update/{id}', 'AyahController@update');
Route::get('/ayah/delete/{id}', 'AyahController@destroy');


// Routes for User
Route::get('/user', 'UserController@index');


// Routes for Feedback
Route::get('/feedback', 'FeedbackController@index');
Route::get('/feedback/find', 'FeedbackController@find');