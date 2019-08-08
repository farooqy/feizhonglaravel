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
Route::put('*', 'generalController@notAllowedMethod');
Route::post('/user/login', 'user\accountController@userLogin');
Route::post('/user/register', 'user\accountController@register');

Route::post('/comp/login', 'companies\accountController@companyLogin');
Route::post('/comp/register/basicInfo', 'companies\accountController@basicInfoRegister');
Route::post('/comp/register/address', 'companies\accountController@addressRegistration');
Route::post('/comp/register/type', 'companies\accountController@companyTypeRegistration');
Route::post('/comp/verifyComp', 'companies\accountController@sendConfirmationText');


Route::post('/comp/status', 'statusController@index');

Route::post('/comp/status/getStatus', 'statusController@getStatus');
Route::post('/comp/status/setStatus', 'statusController@setStatus');
Route::post('/comp/status/addFile', 'statusController@uploadFile');
Route::post('/comp/status/getToken', 'Status_TokenGeneratorModelController@generate_Token');
Route::post('/comp/status/comment', 'statusController@writeComment');
Route::post('/comp/status/like', 'statusController@likeStatus');
Route::post('/comp/status/removePost', 'statusController@removePost');
Route::post('/comp/status/deleteComment', 'statusController@deleteComment');
Route::post('/comp/status/unlikeStatus', 'statusController@unlikeStatus');

Route::post('/comp/products', 'products\productController@getProducts');
Route::post('/comp/product/addProduct', 'products\productController@newProduct');
Route::post('/comp/product/addImage', 'products\productController@addProductImage');
Route::post('/comp/product/genToken', 'Status_TokenGeneratorModelController@generate_Token');

Route::post('/comp/featureCompany', 'companies\featuredCompaniesController@requestToBeFeatured');
Route::post('/comp/getFeaturedImages', 'companies\featuredCompaniesController@getFeaturedCompanies');
Route::post('/comp/allowFeatureCompany', 'companies\featuredCompaniesController@approveFeatureCompany');

Route::post('/comp/quotation/generate', 'companies\quotationController@generateQuotation');

Route::post('/comp/edit/name', 'companies\accountController@updateCompName');
Route::post('/comp/edit/profile', 'companies\accountController@updateCompProfile');
Route::post('/comp/edit/password', 'companies\accountController@updateCompPassword');
Route::post('/comp/edit/phone', 'companies\accountController@updateCompPhone');
Route::post('/comp/edit/addressOne', 'companies\accountController@updateCompAddressOne');
Route::post('/comp/edit/addressTwo', 'companies\accountController@updateCompAddressTwo');
Route::post('/comp/edit/city', 'companies\accountController@updateCompCity');
Route::post('/comp/edit/province', 'companies\accountController@updateCompProvince');
Route::post('/comp/edit/email', 'companies\accountController@updateCompEmail');
Route::post('/comp/edit/description', 'companies\accountController@updateCompDescription');

Route::post('/favorites/doFavorite', 'favoritesController@favoriteCompany');
Route::post('/favorites/getFavorites', 'favoritesController@getFavorites');
Route::post('/favorites/unFavorite', 'favoritesController@removeFavorite');
Route::post('/favorites/isMyFavorite', 'favoritesController@isMyFavorite');

Route::post('message/history', 'chatController@getHistory');
Route::post('message/chatConversation', 'chatController@getChatConversation');
Route::post('message/send', 'chatController@sendMessage');

Route::post('/list/companies', 'generalController@listCompanies');
Route::post('/search/companies', 'generalController@getSearchItem');
Route::post('/search/users', 'generalController@getSearchItem');


Route::get('/quote', 'generalController@showQuote');

Route::post('/images/base64', 'generalController@getBase64Image');

Route::post('/version_code', 'generalController@getVersion');

Route::post('/statistics/profileVisits', 'statisticsController@profileVisit');
Route::post('/statistics/productVisits', 'statisticsController@productSet');