<?php

use App\Http\Middleware\checklogin;
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

Route::get('/', 'user\loginController@login');

Route::post('/sign-in', 'user\loginController@signin');

Route::get('/sign-out', 'user\loginController@signOut');

Route::group(['middleware'=>'checklogin'], function () {

	Route::get('/test', 'testController@test');

	Route::get('/upload-photos', 'testController@upload');

	Route::post('/import-image', 'testController@import');

	Route::get('/home', 'testController@home');
});

Route::get('/admin', 'admin\dashboardController@test');

Route::get('/test2', 'testController@getListAlbums');



