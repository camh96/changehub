<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',                 ['as' => 'home',    'uses' => 'PagesController@home']);
Route::get('about',             ['as' => 'about',   'uses' => 'PagesController@about']);
Route::get('about/contact',     ['as' => 'contact', 'uses' => 'PagesController@contact']);

Route::get('profile/{id}',      ['as' => 'profile.edit',    'uses' => 'ProfileController@edit']);
Route::get('profile/delete/{id}',      ['as' => 'profile.destroy',    'uses' => 'ProfileController@destroy']);
Route::put('profile',           ['as' => 'profile.update',  'uses' => 'ProfileController@update']);

Route::get('admin',             ['as' => 'admin',    'uses' => 'TripController@admin']);
Route::get('users',             ['as' => 'users',    'uses' => 'ProfileController@listall']);
Route::get('users/{id}',        ['as' => 'usersprofile',    'uses' => 'ProfileController@show']);


Route::get('newtrips', 'PagesController@home');

Route::get('new',               ['as' => 'new',   'uses' => 'TripController@create']);
Route::get('mytrips',           ['as' => 'indextrips',   'uses' => 'TripController@index']);
Route::get('mytrips/{id}',      ['as' => 'trips',   'uses' => 'TripController@show']);
Route::get('dashboard',         ['as' => 'dashboard',   'uses' => 'TripController@home']);

Route::post('new', 'TripController@store');

// Authentication routes...
Route::get('auth/login',        ['as' => 'auth.login',      'uses' => 'Auth\AuthController@getLogin']);
Route::post('auth/login',       ['as' => 'auth.accept',     'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout',       ['as' => 'auth.logout',     'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register',     ['as' => 'auth.register',   'uses' => 'Auth\AuthController@getRegister']);
Route::post('auth/register',    ['as' => 'auth.store',     'uses' => 'Auth\AuthController@postRegister']);

Route::get('auth/email-available', ['as' => 'auth.email-available', 'uses' => 'Auth\AuthController@getEmailAvailable']);

// Password reset link request routes...
Route::get('password/email',    ['as' => 'password.email',  'uses' => 'Auth\PasswordController@getEmail']);
Route::post('password/email',   ['as' => 'password.send',   'uses' => 'Auth\PasswordController@postEmail']);


// Password reset routes...
Route::get('password/reset/{token}',    ['as' => 'password.reset',  'uses' => 'Auth\PasswordController@getReset']);
Route::post('password/reset',           ['as' => 'password.accept', 'uses' => 'Auth\PasswordController@postReset']);

