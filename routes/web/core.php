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

/**/
Route::group(['prefix' => '', 'middleware' => ['authlogin']], function () {
    Route::get('', [
        'as' => 'core.dashboard',
        'uses' => 'CoreController@showDashboard'
    ]);
    Route::get('/dashboard', [
        'as' => 'core.dashboard.inicio',
        'uses' => 'CoreController@showDashboard'
    ]);
});
