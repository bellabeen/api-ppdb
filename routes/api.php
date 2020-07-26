<?php

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

Route::namespace('Auth')->group(function (){
    Route::post('register', 'RegisterController');
    Route::post('login', 'LoginController');
    Route::post('logout', 'LogoutController');
});

Route::namespace('Siswa')->middleware('auth:api')->group(function (){
    Route::post('create-new-siswa', 'SiswaController@store');
    Route::patch('update-the-selected-siswa/{siswa}', 'SiswaController@update');
});


Route::get('siswa/', 'Siswa\SiswaController@index');
Route::get('siswa/{siswa}', 'Siswa\SiswaController@show');
Route::get('user', 'UserController');
