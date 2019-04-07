<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/comp/status', 'statusController@index');
Route::post('/comp/status/getStatus', 'statusController@getStatus');
Route::get('/comp/status/getStatus', 'statusController@getStatus');
Route::get('/comp/status/setStatus', 'statusController@setStatus');
Route::post('/comp/status/setStatus', 'statusController@setStatus');
Route::post('/comp/status/addFile', 'statusController@uploadFile');
Route::post('/comp/status/getToken', 'Status_TokenGeneratorModelController@generate_Token');

Route::post('/comp/products', 'products\productController@getProducts');
Route::post('/comp/product/addProduct', 'products\productController@newProduct');
Route::post('/comp/product/addImage', 'products\productController@addProductImage');
Route::post('/comp/product/genToken', 'Status_TokenGeneratorModelController@generate_Token');

Route::post('message/history', 'chatController@getHistory');
Route::get('message/history', 'chatController@getHistory');