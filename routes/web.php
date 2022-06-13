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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', 'App\Http\Controllers\MahasiswaController@index')->name('index');
Route::get('/index/inputdata', 'App\Http\Controllers\MahasiswaController@inputdata')->name('inputdata');
Route::post('/index/input', 'App\Http\Controllers\MahasiswaController@input')->name('input');
Route::get('/index/edit/{no}','App\Http\Controllers\MahasiswaController@edit')->name('edit');
Route::post('/index/update','App\Http\Controllers\MahasiswaController@update')->name('update');
Route::get('/index/hapus/{no}','App\Http\Controllers\MahasiswaController@hapus')->name('hapus');
Route::get('/index/aboutme',function () {return view('aboutme', ["title" => "About"]);});
