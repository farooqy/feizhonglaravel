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

Route::group(['middleware' => ['web']], function(){
    //shared routes between comp and user
  Route::get('/', 'browserController@getIndexPage')->name("homePage");
  Route::get('/register', 'browserController@getRegisterPage')->name("registrationPage");
  Route::get('/login', 'browserController@getLoginPage')->name("loginPage");
  Route::get('/logout', 'browserController@logout')->name("logoutPage");
  Route::get('/profile', 'browserController@profilePage')->name("profilePage");
  Route::get('/profile/edit', 'browserController@editProfilePage')->name("editProfilePage");
  Route::get('/issue', 'browserController@issuePage')->name('issuePage');
  Route::get('/chat/messages', 'browserController@messagesPage')->name('messagesPage');
  Route::get('/notifications', 'browserController@messagesPage')->name('messagesPage');


  // User routes
  Route::get('/user/needs', 'browserController@userNeedsPage')->name('userNeedsPage');
  Route::get('/user/favorites', 'browserController@favoritesPage')->name('favoritesPage');
  Route::get('/user/history', 'browserController@historyPage')->name('historyPage');
  Route::get('/user/agents', 'browserController@agentsPage')->name('agentsPage');

  // Comp routes
  Route::get('/comp/view/{comp_id}/{comp_token}', 'browserController@viewCompany');
  Route::get('/comp/list', 'browserController@listCompanies');
  Route::get('/comp/subscription', 'browserController@compSubscription');
  Route::get('/comp/posts', 'browserController@showPostPage')->name("showPostPage");
  Route::get('/comp/products', 'browserController@productPage')->name("productPage");
  Route::get('/comp/needs', 'browserController@compMatchedNeedsPage')->name("compMatchedNeedsPage");

  Route::get('/exhibition', 'generalController@getExhbitionPdf');
  Route::get('/whatsapp', 'generalController@whatsAppLink');

  Route::get('/download', 'generalController@webDownloadPage');
});
