<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|__________________________________________________________________________
*/


Route::get('registro', [
    'as' => 'user.register',
    'uses' => 'UserController@showRegistration'
]);

Route::get('', [
    'as' => 'user.login',
    'uses' => 'UserController@showLogin'
]);

Route::get('login', [
    'as' => 'user.login.login',
    'uses' => 'UserController@showLogin'
]);
Route::get('fillTopBanner', [
    'as' => 'user.fillTopBanner',
    'uses' => 'UserController@fillTopBanner'
]);