<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('users','UserController@users');        //api user
Route::get('siswas','SiswaController@siswas');      //api siswa
Route::get('gurus','GuruController@gurus');      //api guru

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/rating/mata-pelajaran/guru/set-rating', 'RatingController@setRating');