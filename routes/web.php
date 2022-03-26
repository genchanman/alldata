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

Route::get('/record', 'RecordController@record')->name('index');
Route::post('/record', 'RecordController@store');
Route::get('/timeline', 'RecordController@timeline');
Route::get('/grades/{users}', 'RecordController@grades');
Route::get('/maketimeline', 'RecordController@maketimeline');
Route::post('/maketimeline', 'RecordController@make');
//Route::get('/comfirmed', 'RecordController@comfirmed');
//Route::post('/comfirmed', 'RecordController@call');
Auth::routes();
Route::get('/', 'RecordController@home');
Route::get('/userrecord', 'RecordController@userrecord');
//LINE LOGIN
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/linelogin/{provider}', 'Auth\LoginController@redirectToProvider')->name('linelogin');
Route::get('/linelogin/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

