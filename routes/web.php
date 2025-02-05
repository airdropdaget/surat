<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware'=>'auth'],function(){
Route::get('/permasalahan','BerandaController@permasalahan');
Route::get('/user','BerandaController@user');
Route::get('/history','BerandaController@history');
Route::get('/charts','BerandaController@charts');
Route::get('/ubah','BerandaController@ubah_password');
Route::get('/forms','BerandaController@forms');
Route::post('/simpan','BerandaController@simpan');
Route::post('/update','BerandaController@update');
Route::get('/edit/{id}','BerandaController@edit');
Route::get('/show/{id}','BerandaController@show');
Route::get('/info/{id}','BerandaController@detail');
Route::get('/index','BerandaController@index');
});