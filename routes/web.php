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

Route::get('/', 'RecordController@record');
Route::post('/', 'RecordController@store');
Route::get('/login', 'RecordController@login');
Route::get('/login/{provider}', 'Auth\LoginController@redirectToProvider')->name('login');
Route::get('/login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');