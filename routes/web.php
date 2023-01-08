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
    return view('main');
});

Route::get('Home', function () {
    return view('home');
});

//route mahsiswa

Route::get('pegawai','PegawaiController@list');
Route::get('apiget','PegawaiController@apiget');
Route::get('pegawai/add','PegawaiController@add')->name('pegawai.add');
Route::post('pegawai/save','PegawaiController@save');
Route::post('pegawai/update/{id}','PegawaiController@editProcess')->name('pegawai.update');
Route::get('pegawai/edit/{id}','PegawaiController@edit')->name('pegawai.edit');
Route::patch('pegawai/update/{id}','PegawaiController@editProcess')->name('pegawai.update');
Route::delete('pegawai/{id}','PegawaiController@delete');




