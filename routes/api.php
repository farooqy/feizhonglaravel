<?php

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::put('*', 'generalController@notAllowedMethod');
Route::post('/user/login', 'user\accountController@userLogin');
Route::post('/user/register', 'user\accountController@register');
Route::post('/user/setInterest', 'user\accountController@setUserInterest');
Route::post('/user/emailConfirmation', 'user\accountController@emailConfirmation');
Route::post('/user/confirmUser', 'user\accountController@verifyUser');
Route::post('/user/update/address', 'user\accountController@updateUserAddress');
Route::post('/user/update/aboutMe', 'user\accountController@updateUserAboutMe');
Route::post('/user/update/profile', 'user\accountController@updateUserProfile');
Route::post('/user/update', 'user\accountController@updateUserInfo');
Route::post('/user/resetPassword', 'user\accountController@resetPassword');
Route::post('/user/data', 'user\accountController@getUserData');
Route::post('/user/address', 'user\accountController@getUserAddress');
Route::post('/user/quotations', 'user\accountController@getUserQuotations');
Route::post('/user/needs/post', 'user\userNeedController@postNeed');
Route::post('/user/needs/post/images', 'user\userNeedController@postNeedImages');
Route::post('/user/needs', 'user\userNeedController@getUserNeeds');
Route::post('/user/needs/matches', 'user\userNeedController@getNeedMatches');

Route::post('/comp/login', 'companies\accountController@companyLogin');
Route::post('/comp/register/basicInfo', 'companies\accountController@basicInfoRegister');
Route::post('/comp/register/address', 'companies\accountController@addressRegistration');
Route::post('/comp/register/type', 'companies\accountController@companyTypeRegistration');
Route::post('/comp/verifyComp', 'companies\accountController@sendConfirmationText');
Route::post("/comp/myposts", "companies\accountController@getMyPosts");
Route::post('/comp/register/phoneverificaton', 'companies\accountController@sendConfirmationText');
Route::post("/comp/addLicense", "companies\companyLicenseController@addCompanyLicense");
Route::post("/comp/getLicense", "companies\companyLicenseController@getCompanyLicense");
Route::post("/comp/data", "companies\accountController@getCompanyData");

Route::post('/comp/status', 'statusController@index');
Route::post('/comp/status/getStatus', 'statusController@getStatus');
Route::post('/comp/status/getCompStatus', 'statusController@getSimpleStatusDetails');
Route::post('/comp/status/getCompSimpleStatus', 'statusController@simpleDetailedStatus');
Route::post('/comp/status/setStatus', 'statusController@setStatus');
Route::post('/comp/status/addFile', 'statusController@uploadFile');
Route::post('/comp/status/getToken', 'Status_TokenGeneratorModelController@generate_Token');
Route::post('/comp/status/comment', 'status\commentController@writeComment');
Route::post('/comp/status/like', 'statusController@likeStatus');
Route::post('/comp/status/removePost', 'statusController@removePost');
Route::post('/comp/status/deleteComment', 'status\commentController@deleteComment');
Route::post('/comp/status/unlikeStatus', 'statusController@unlikeStatus');

Route::post('/comp/products', 'products\productController@getProducts');
Route::post('/comp/products/list', 'products\productController@getListOfCompanyProducts');
Route::post('/comp/product/addProduct', 'products\productController@newProduct');
Route::post('/comp/product/addImage', 'products\productController@addProductImage');
Route::post('/comp/product/genToken', 'Status_TokenGeneratorModelController@generate_Token');

Route::post('/comp/featureCompany', 'companies\featuredCompaniesController@requestToBeFeatured');
Route::post('/comp/getFeaturedImages', 'companies\featuredCompaniesController@getFeaturedCompanies');
Route::post('/comp/allowFeatureCompany', 'companies\featuredCompaniesController@approveFeatureCompany');
Route::post('/comp/package/new/featured', 'plans\featuredPackagePlan@subscribeToPlan');
Route::post('/comp/package/list/featured', 'plans\featuredPackagePlan@getSubscribedToPlan');

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

Route::post('/comp/send/email/verification', 'companies\accountController@sendVerificationMail');

Route::post('/favorites/doFavorite', 'favoritesController@favoriteCompany');
Route::post('/favorites/getFavorites', 'favoritesController@getFavorites');
Route::post('/favorites/unFavorite', 'favoritesController@removeFavorite');
Route::post('/favorites/isMyFavorite', 'favoritesController@isMyFavorite');

Route::post('message/history', 'chatController@getHistory');
Route::post('message/chatConversation', 'chatController@getChatConversation');
Route::post('message/send', 'chatController@sendMessage');
Route::post('message/getSpecificChat', 'chatController@getSpecificChat');
Route::post('message/markasread', 'chatController@MarkMessageStatusRead');

Route::post('/list/companies', 'generalController@listCompanies');
Route::post('/list/getCompanyData', 'generalController@getCompanyData');
Route::post('/search', 'generalController@getSearchItem');

Route::get('/quote', 'generalController@showQuote');

Route::post('/images/base64', 'generalController@getBase64Image');
Route::post('/whatsapp', 'generalController@whatsAppLink');
Route::post('/exhbition', 'generalController@getExhbitionPdf');

Route::post('/version_code', 'generalController@getVersion');

Route::post('/statistics/profileVisits', 'statisticsController@profileVisit');
Route::post('/statistics/visitedProfiles', 'statisticsController@visitedProfiles');
Route::post('/statistics/productVisits', 'statisticsController@productSet');
Route::post('/statistics/getApiKey', 'statisticsController@getApiKey');
Route::post('/statistics/getApiKey/browser', 'statisticsController@getApiKeyBrowser');
Route::post('/statistics/generateIdAndToken', 'statisticsController@generateIdAndToken');



//Atoc 2.0 Apis

Route::post('/v2/user/login', 'user\accountController@userLoginV2');
Route::middleware('customauth')->group(function () {
    Route::post('/v2/user/update/password', 'user\accountController@updateUserPassword');
    Route::post('/v2/user/update', 'user\accountController@updateUserInfoV2');
    Route::post('/v2/user/needs/post', 'user\userNeedController@postNeed');
    Route::post('/v2/user/needs/post/images', 'user\userNeedController@postNeedImagesV2');
});
