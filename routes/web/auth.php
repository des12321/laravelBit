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

Route::post('loginpost', [
    'as' => 'auth.login',
    'uses' => 'AuthUserController@loginUser'
]);

Route::get('Logout', [
    'as' => 'auth.logout',
    'uses' => 'AuthUserController@logoutUser'
]);