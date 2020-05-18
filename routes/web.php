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

Route::get('/', ['as'=>'dashboard','uses'=>'DashboardController@index']);
Route::get('/tambahMatpel', 'DashboardController@getMatpelList');
Route::post('/tambahMatpel', 'DashboardController@tambahMatpel');

Auth::routes();

Route::group(['middleware'=>'auth'],function(){
	Route::get('/epbmOnline/EPBM', 'ElementController@index')->name('epbmOnline.EPBM');
	Route::get('/charts', ['as'=>'charts','uses'=>'ChartsController@index']);
	Route::get('/panels', ['as'=>'panels','uses'=>'PanelsController@index']);
	Route::get('/profile', ['as'=>'profile','uses'=>'ProfileController@index']);
	Route::get('/notification', ['as'=>'notification','uses'=>'NotificationController@index']);
	Route::get('/tables', ['as'=>'tables','uses'=>'TablesController@index']);
	Route::get('/typography', ['as'=>'typography','uses'=>'TypographyController@index']);
	Route::get('/icons', ['as'=>'icons','uses'=>'IconsController@index']);
    Route::get('/epbmOnline/EPBM/isi/{id}', 'EpbmController@isiEPBM');
    Route::get('/epbmOnline', ['as'=>'elements','uses'=>'AnnouncementEpbmController@index']);
});


Route::get('/home', 'HomeController@index')->middleware('auth');
// Route::get('/epbm', 'MatPelController@index');
// Route::get('/charts', ['as'=>'charts','uses'=>'ChartsController@index']);
Route::post('/rating/mata-pelajaran/guru/set-rating', 'RatingController@setRating');


// route guru
Route::get('/guru', function(){
    return view('guruPage');
})->middleware('auth:guru')->name('guruPage');
Route::get('guru-login','Auth\GuruController@showLoginForm');
Route::post('guru-login', ['as' => 'guru-login', 'uses' => 'Auth\GuruController@login']);
Route::get('guru-register','Auth\GuruController@showRegisterPage');
Route::post('guru-register', 'Auth\GuruController@register')->name('guru.register');

Route::get('/test', 'MatpelUser@index');
Route::post('/test', 'MatpelUser@tambah');
