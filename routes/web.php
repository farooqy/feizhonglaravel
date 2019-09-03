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
<<<<<<< HEAD
Route::get('/exhbition', 'generalController@getExhbitionPdf');
Route::get('/whatsapp', 'generalController@whatsAppLink');
=======

Route::get('/download', 'generalController@webDownloadPage');
>>>>>>> 118a6ee891ab36af38e97be4f392fba849a85e75
