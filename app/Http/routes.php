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
Route::get('/banner/consultaBanner',['as' => 'consultaBanner', 'uses' => 'BannerController@listBanner']);
Route::get('/banner/createBanner',['as' => 'createBanner', 'uses' => 'BannerController@showCreateBanner']);
Route::post('/banner/createBanner',['as' => 'createBanner', 'uses' => 'BannerController@CreateBanner']);

//prueba - cambiar por get
Route::post('banner/BuscarBanner',['as' => 'BuscarBanner','uses' => 'BannerController@BuscarBanner']);