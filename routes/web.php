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
    return view('index');
});
Route::get('/exhbition', 'generalController@getExhbitionPdf');
Route::get('/whatsapp', 'generalController@whatsAppLink');

Route::get('/download', 'generalController@webDownloadPage');
