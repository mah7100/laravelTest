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

Route::get('/', 'App\Http\Controllers\ActionController@index');
Route::post('/add', 'App\Http\Controllers\ActionController@add');
Route::post('/delete', 'App\Http\Controllers\ActionController@delete');
