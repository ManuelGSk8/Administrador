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

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/home',function() {
	return view('Home.home');
});
*/
Route::get('/dashboard',['as' => 'dashboard', 'uses' => 'HomeController@index']);
Route::get('/repoTest',['as' => 'repoTest', 'uses' => 'HomeController@repoTest']);
Route::get('/createBanner',['as' => 'createBanner', 'uses' => 'BannerController@showCreateBanner']);
Route::post('/createBanner',['as' => 'createBanner', 'uses' => 'BannerController@CreateBanner']);