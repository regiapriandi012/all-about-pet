<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('konsultasi', 'KonsultasiDokterApiController@store');
Route::get('konsultasi', 'KonsultasiDokterApiController@index');
Route::put('konsultasi/{id}', 'KonsultasiDokterApiController@update');
Route::delete('konsultasi/{id}', 'KonsultasiDokterApiController@destroy');

Route::post('booking', 'PemesananKlinikApiController@store');
Route::get('booking', 'PemesananKlinikApiController@index');
Route::put('booking/{id}', 'PemesananKlinikApiController@update');
Route::delete('booking/{id}', 'PemesananKlinikApiController@destroy');

