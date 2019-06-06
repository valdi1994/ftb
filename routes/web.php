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

Route::get('/', ['as'=>'home', 'uses' => 'NavController@home']);
Route::get('/auth', ['as'=>'auth', 'uses' => 'NavController@auth']);
Route::get('/bounty', ['as'=>'bounty', 'uses' => 'NavController@bounty']);
Route::get('/contact-us', ['as'=>'contact_us', 'uses' => 'NavController@contact_us']);
Route::get('/how-to-buy-ftb', ['as'=>'how_to', 'uses' => 'NavController@how_to']);
Route::get('/profile', ['as'=>'profile', 'uses' => 'NavController@profile']);
Route::get('/social', ['as'=>'social', 'uses' => 'NavController@social']);
Route::get('/payment', ['as'=>'payment', 'uses' => 'NavController@payment']);
Route::post('/payment', ['as'=>'save.payment', 'uses' => 'UserController@payment']);
Route::get('/white-paper', ['as'=>'white_paper', 'uses' => 'NavController@white_paper']);
Route::post('/profile', ['as'=>'profile.update', 'uses' => 'UserController@updateProfile']);
Route::post('/package', ['as'=>'profile.package', 'uses' => 'UserController@requirePackage']);
Route::get('/packages', ['as' => 'package', 'uses' => 'NavController@package']);
Route::any('/me-logout', ['as'=>'user.logout', 'uses' => 'UserController@logout']);
Route::any('/activate/{id}/{code}', ['as'=>'user.activate', 'uses' => 'UserController@activate']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
