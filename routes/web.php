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
	Route::get('/epbm', ['as'=>'elements','uses'=>'ElementController@index']);
	Route::get('/charts', ['as'=>'charts','uses'=>'ChartsController@index']);
	Route::get('/panels', ['as'=>'panels','uses'=>'PanelsController@index']);
	Route::get('/profile', ['as'=>'profile','uses'=>'ProfileController@index']);
	Route::get('/notification', ['as'=>'notification','uses'=>'NotificationController@index']);
	Route::get('/tables', ['as'=>'tables','uses'=>'TablesController@index']);
	Route::get('/typography', ['as'=>'typography','uses'=>'TypographyController@index']);
	Route::get('/icons', ['as'=>'icons','uses'=>'IconsController@index']);
	Route::get('/epbm/isi/{id}', 'EpbmController@isiEPBM');
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


// route admin
Route::get('/admin', function(){
    return view('admin');
})->middleware('auth:admin')->name('admin');
Route::get('admin-login','Auth\AdminController@showLoginForm');
Route::post('admin-login', ['as' => 'admin-login', 'uses' => 'Auth\AdminController@login']);
Route::get('admin-register','Auth\AdminController@showRegisterPage');
Route::post('admin-register', 'Auth\AdminController@register')->name('admin.register');
Route::get('/admin/daftarsiswa', ['as'=>'daftarsiswa','uses'=>'Auth\AdminController@daftarsiswa']);
Route::get('/admin/siswa/hapus/{id}', 'Auth\AdminController@siswaDelete');
Route::get('/admin/daftarguru', ['as'=>'daftarguru','uses'=>'Auth\AdminController@daftarguru']);
Route::get('/admin/guru/hapus/{id}', 'Auth\AdminController@guruDelete');
Route::get('/admin/daftarmatpel', ['as'=>'daftarmatpel','uses'=>'Auth\AdminController@daftarMatpel']);
Route::get('/admin/matpel/hapus/{id}', 'Auth\AdminController@matpelDelete');


Route::get('/test', 'MatpelUser@index');
Route::post('/test', 'MatpelUser@tambah');