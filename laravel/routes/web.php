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

Route::get('/', 'IndexController@show')->name('index');

Route::get('/indexadmin', 'IndexController@showadmin')->name('indexadmin')->middleware('login_auth');

Route::get('/artikeltipsmerawathewan/{id}', 'TipsMerawatHewanController@show')->name('artikel.tipsmerawathewan');
Route::get('/artikeltipsmerawathewan/{id}/edit', 'TipsMerawatHewanController@edit')->name('edit.tipsmerawathewan')->middleware('login_auth');
Route::patch('/artikeltipsmerawathewan/{id}', 'TipsMerawatHewanController@update') ->name('update.tipsmerawathewan')->middleware('login_auth');
Route::delete('/artikeltipsmerawathewan/{id}', 'TipsMerawatHewanController@destroy') ->name('destroy.tipsmerawathewan')->middleware('login_auth');

Route::get('/artikeltipsmerawatkandang/{id}', 'TipsMerawatKandangController@show')->name('artikel.tipsmerawatkandang');
Route::get('/artikeltipsmerawatkandang/{id}/edit', 'TipsMerawatKandangController@edit')->name('edit.tipsmerawatkandang')->middleware('login_auth');
Route::patch('/artikeltipsmerawatkandang/{id}', 'TipsMerawatKandangController@update')->name('update.tipsmerawatkandang')->middleware('login_auth');
Route::delete('/artikeltipsmerawatkandang/{id}', 'TipsMerawatKandangController@destroy')->name('destroy.tipsmerawatkandang')->middleware('login_auth');


Route::get('/artikeltipsmengatasihewansakit/{id}', 'TipsMengatasiHewanSakitController@show')->name('artikel.tipsmengatasihewansakit');
Route::get('/artikeltipsmengatasihewansakit/{id}/edit', 'TipsMengatasiHewanSakitController@edit')->name('edit.tipsmengatasihewansakit')->middleware('login_auth');
Route::patch('/artikeltipsmengatasihewansakit/{id}', 'TipsMengatasiHewanSakitController@update')->name('update.tipsmengatasihewansakit')->middleware('login_auth');
Route::delete('/artikeltipsmengatasihewansakit/{id}', 'TipsMengatasiHewanSakitController@destroy')->name('destroy.tipsmengatasihewansakit')->middleware('login_auth');

Route::get('/artikelrekomendasimakanan/{id}', 'RekomendasiMakananController@show')->name('artikel.rekomendasimakanan');
Route::get('/artikelrekomendasimakanan/{id}/edit', 'RekomendasiMakananController@edit')->name('edit.rekomendasimakanan')->middleware('login_auth');
Route::patch('/artikelrekomendasimakanan/{id}', 'RekomendasiMakananController@update')->name('update.rekomendasimakanan')->middleware('login_auth');
Route::delete('/artikelrekomendasimakanan/{id}', 'RekomendasiMakananController@destroy')->name('destroy.rekomendasimakanan')->middleware('login_auth');

Route::get('/artikelrekomendasivitamin/{id}', 'RekomendasiVitaminController@show')->name('artikel.rekomendasivitamin');
Route::get('/artikelrekomendasivitamin/{id}/edit', 'RekomendasiVitaminController@edit')->name('edit.rekomendasivitamin')->middleware('login_auth');
Route::patch('/artikelrekomendasivitamin/{id}', 'RekomendasiVitaminController@update')->name('update.rekomendasivitamin')->middleware('login_auth');
Route::delete('/artikelrekomendasivitamin/{id}', 'RekomendasiVitaminController@destroy')->name('destroy.rekomendasivitamin')->middleware('login_auth');

Route::get('/artikelinformasivaksin/{id}', 'InformasiVaksinController@show')->name('artikel.informasivaksin');
Route::get('/artikelinformasivaksin/{id}/edit', 'InformasiVaksinController@edit')->name('edit.informasivaksin')->middleware('login_auth');
Route::patch('/artikelinformasivaksin/{id}', 'InformasiVaksinController@update')->name('update.informasivaksin')->middleware('login_auth');
Route::delete('/artikelinformasivaksin/{id}', 'InformasiVaksinController@destroy')->name('destroy.informasivaksin')->middleware('login_auth');

Route::get('/dashboardadmin', function () {return view('admin.dashboard');})->middleware('login_auth');

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

Route::get('/adduser', 'RegisterAdminController@create')->name('addadmin.create')->middleware('login_auth');
Route::post('/adduser', 'RegisterAdminController@store') ->name('addadmin.store')->middleware('login_auth');

Route::get('/uploadtipsmerawathewan', 'TipsMerawatHewanController@create')->name('tipsmerawathewan.create')->middleware('login_auth');
Route::post('/uploadtipsmerawathewan', 'TipsMerawatHewanController@store') ->name('tipsmerawathewan.store')->middleware('login_auth');

Route::get('/uploadtipsmerawatkandang', 'TipsMerawatKandangController@create')->name('tipsmerawatkandang.create')->middleware('login_auth');
Route::post('/uploadtipsmerawatkandang', 'TipsMerawatKandangController@store') ->name('tipsmerawatkandang.store')->middleware('login_auth');

Route::get('/uploadtipsmengatasihewansakit', 'TipsMengatasiHewanSakitController@create')->name('tipsmengatasihewansakit.create')->middleware('login_auth');
Route::post('/uploadtipsmengatasihewansakit', 'TipsMengatasiHewanSakitController@store') ->name('tipsmengatasihewansakit.store')->middleware('login_auth');

Route::get('/uploadrekomendasimakanan', 'RekomendasiMakananController@create')->name('rekomendasimakanan.create')->middleware('login_auth');
Route::post('/uploadrekomendasimakanan', 'RekomendasiMakananController@store') ->name('rekomendasimakanan.store')->middleware('login_auth');

Route::get('/uploadrekomendasivitamin', 'RekomendasiVitaminController@create')->name('rekomendasivitamin.create')->middleware('login_auth');
Route::post('/uploadrekomendasivitamin', 'RekomendasiVitaminController@store') ->name('rekomendasivitamin.store')->middleware('login_auth');

Route::get('/uploadinformasivaksin', 'InformasiVaksinController@create')->name('informasivaksin.create')->middleware('login_auth');
Route::post('/uploadinformasivaksin', 'InformasiVaksinController@store') ->name('informasivaksin.store')->middleware('login_auth');