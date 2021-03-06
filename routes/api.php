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

Route::apiResource('artikel', App\Http\Controllers\artikelAPIController::class);

Route::apiResource('kategori_artikel', App\Http\Controllers\KategoriArtikelAPIController::class);

Route::apiResource('berita', App\Http\Controllers\beritaAPIController::class);

Route::apiResource('kategori_berita', App\Http\Controllers\KategoriBeritaAPIController::class);

Route::apiResource('galeri', App\Http\Controllers\galeriAPIController::class);

Route::apiResource('kategori_galeri', App\Http\Controllers\KategoriGaleriAPIController::class);

Route::apiResource('pengumuman', App\Http\Controllers\pengumumanAPIController::class);

Route::apiResource('kategori_pengumuman', App\Http\Controllers\KategoriPengumumanAPIController::class);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('soal1','App\Http\Controllers\BabSatuController@a1');

Route::get('soal2','App\Http\Controllers\BabSatuController@a2');

Route::get('soal3','App\Http\Controllers\BabSatuController@a3');

Route::get('soal4','App\Http\Controllers\BabSatuController@a4');

Route::get('soal5','App\Http\Controllers\BabDuaController@a5');

Route::get('soal6','App\Http\Controllers\BabDuaController@a6');

Route::get('soal7','App\Http\Controllers\BabDuaController@a7');


