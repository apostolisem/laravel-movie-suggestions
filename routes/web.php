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

Route::get('/', 'homeController@index');

Route::get('movies/', 'movieController@getAllMovies');

Route::post('movies/', 'movieController@getSuggestion');

Route::get('movies/{id}', 'movieController@movie');
