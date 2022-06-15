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

Route::get('/register', 'AuthController@register');

Route::post('/simpanuser', 'AuthController@simpanuser');

Route::get('/', 'AuthController@login');

Route::post('/cekmasuk', 'AuthController@cekmasuk');

Route::get('home', 'BlogController@home');
Route::get('tentang', 'BlogController@tentang');
Route::get('mahasiswa', 'BlogController@mahasiswa');