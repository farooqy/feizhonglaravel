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
    return view('welcome');
});

Route::get('/comp/status', 'statusController@index');
Route::post('/comp/status/getStatus', 'statusController@getStatus');
Route::get('/comp/status/getStatus', 'statusController@getStatus');
Route::get('/comp/status/setFiles', 'statusController@setFiles');
Route::post('/comp/status/setStatus', 'statusController@setStatus');

//messages

Route::post('/messages/history', 'chatController@getMessages');
Route::get('message/history', 'chatController@getHistory');
Route::get('/quote', 'generalController@showQuote');