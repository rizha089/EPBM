<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

*/


Auth::routes();

Route::group(['middleware'=>'guest'],function(){
	Route::get('/', ['as'=>'dashboard','uses'=>'DashboardController@index']);
	Route::get('/epbm', ['as'=>'elements','uses'=>'ElementController@index']);
	Route::get('/charts', ['as'=>'charts','uses'=>'ChartsController@index']);
	Route::get('/panels', ['as'=>'panels','uses'=>'PanelsController@index']);
	Route::get('/profile', ['as'=>'profile','uses'=>'ProfileController@index']);
	Route::get('/notification', ['as'=>'notification','uses'=>'NotificationController@index']);
	Route::get('/tables', ['as'=>'tables','uses'=>'TablesController@index']);
	Route::get('/typography', ['as'=>'typography','uses'=>'TypographyController@index']);
	Route::get('/icons', ['as'=>'icons','uses'=>'IconsController@index']);
	// Route::get('/epbm/isi/{id}', ['as'=>'isi','uses'=>'EpbmController@isiEPBM']);
	Route::get('/epbm/isi/{id}', 'EpbmController@isiEPBM');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
// Route::get('/epbm', 'MatPelController@index');
Route::get('/test', 'MatpelUser@index');
Route::post('/rating/mata-pelajaran/guru/set-rating', 'RatingController@setRating');