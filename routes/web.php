<?php

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
Route::get('tugas4', function () {
    return view('htmltugas4');
});
Route::get('praktikum2', function () {
    return view('htmlpraktikum2');
});
Route::get('ets2021',"ViewController@showets");
Route::get('tugasphp',"ViewController@php");
Route::post('actionphp',"ViewController@actionPHP");

Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/detail/{id}','PegawaiController@view');

Route::get('/pendapatan','PendapatanController@index');
Route::get('/pendapatan/tambah','PendapatanController@tambah');
Route::post('/pendapatan/store','PendapatanController@store');
Route::get('/pendapatan/edit/{id}','PendapatanController@edit');
Route::post('/pendapatan/update','PendapatanController@update');
Route::get('/pendapatan/hapus/{id}','PendapatanController@hapus');
Route::get('/pendapatan/cari','PendapatanController@cari');
Route::get('/pendapatan/detail/{id}','PendapatanController@view');

Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
Route::get('/absen/cari','AbsenController@cari');
Route::get('/absen/detail/{id}','AbsenController@view');

Route::get('/kursi','KursiController@index');
Route::get('/kursi/tambah','KursiController@tambah');
Route::post('/kursi/store','KursiController@store');
Route::get('/kursi/edit/{id}','KursiController@edit');
Route::post('/kursi/update','KursiController@update');
Route::get('/kursi/hapus/{id}','KursiController@hapus');
Route::get('/kursi/cari','KursiController@cari');
Route::get('/kursi/detail/{id}','KursiController@view');
