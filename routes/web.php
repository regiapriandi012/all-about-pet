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
    return view('index');
});
Route::get('/artikel', function () {
    return view('artikel');
});
Route::get('/dashboardadmin', function () {
    return view('admin.dashboard');
});

Route::get('/datakonsul', 'KonsultasiDokterController@show')->name('admin.dataKonsul')->middleware('login_auth');

Route::get('/databooking', 'PemesananKlinikController@show')->name('admin.dataBooking')->middleware('login_auth');

Route::get('/inputkonsul', 'InputHasilKonsultasiDokterController@show')->name('admin.inputKonsul')->middleware('login_auth');

Route::delete('/hapusdatakonsul/{hasilkonsul}', 'KonsultasiDokterController@destroy')->name('konsultasi.destroy')->middleware('login_auth');
Route::delete('/hapusdatabooking/{hasilbook}', 'PemesananKlinikController@destroy')->name('pemesanan.destroy')->middleware('login_auth');

Route::get('/inputhasilkonsul/{hasilkonsul}/input', 'InputHasilKonsultasiDokterController@edit')->name('admin.edit')->middleware('login_auth');
Route::patch('/inputhasilkonsul/{hasilkonsul}', 'InputHasilKonsultasiDokterController@update')->name('admin.update')->middleware('login_auth');

Route::get('/konsultasi', 'KonsultasiDokterController@create')->name('konsultasi.konsulDok');
Route::post('/konsultasi', 'KonsultasiDokterController@store') ->name('konsultasi.store');

Route::get('/booking', 'PemesananKlinikController@create')->name('booking.bookKlinik');
Route::post('/booking', 'PemesananKlinikController@store') ->name('booking.store');

Route::get('/hasilkonsultasi', 'HasilKonsultasiDokterController@create')->name('hasilkonsultasi.hasilKonsulDok');
Route::post('/hasilkonsultasi', 'HasilKonsultasiDokterController@store') ->name('hasilkonsultasi.store');

Route::get('/hasilbooking', 'HasilPemesananKlinikController@create')->name('hasilbooking.hasilBookKlinik');
Route::post('/hasilbooking', 'HasilPemesananKlinikController@store') ->name('hasilbooking.store');

Route::get('/login', 'AdminController@index')->name('login.index'); 
Route::get('/logout', 'AdminController@logout')->name('login.logout'); 
Route::post('/login', 'AdminController@process')->name('login.process');

