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
Route::get('/timeline', 'RecordController@timeline');
Route::get('/grades', 'RecordController@grades');
Route::get('/login/line', 'RecordController@login');
Route::get('login/line', 'RecordController@line');