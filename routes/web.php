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
    return view('form');
});


Route::get('/index','UserDetailController@index');
Route::post('submitForm','UserDetailController@store');
Route::get('/downloadPDF/{id}','UserDetailController@downloadPDF');
Route::get('/downloadAllPDF','UserDetailController@downloadAll')->name('download.all');
