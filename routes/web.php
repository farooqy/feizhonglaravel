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
  Route::get('/', 'browserController@getIndexPage')->name("homePage");
  Route::get('/register', 'browserController@getRegisterPage')->name("registrationPage");
  Route::get('/login', 'browserController@getLoginPage')->name("loginPage");
  Route::get('/login', 'browserController@getLoginPage')->name("login");
  Route::get('/logout', 'browserController@logout')->name("logoutPage");
  Route::get('/profile', 'browserController@profilePage')->name("profilePage");
  Route::get('/profile/edit', 'browserController@editProfilePage')->name("editProfilePage");

  Route::get('/comp/view/{comp_id}/{comp_token}', 'browserController@viewCompany');
  Route::get('/comp/list', 'browserController@listCompanies');
  Route::get('/posts', 'browserController@showPostPage')->name("showPostPage");
  Route::get('/exhibition', 'generalController@getExhbitionPdf');
  Route::get('/whatsapp', 'generalController@whatsAppLink');

  Route::get('/download', 'generalController@webDownloadPage');
});
