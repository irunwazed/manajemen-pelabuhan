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



Route::get('/pelayanan-kapal/pengajuan-pkk/get/pbm', 'PelayananKapal\PengajuanPKKController@getPBM');
Route::post('/pelayanan-kapal/pengajuan-pkk/save/pbm', 'PelayananKapal\PengajuanPKKController@savePBM');
Route::get('/pelayanan-kapal/pengajuan-pkk/delete/pbm/{id}', 'PelayananKapal\PengajuanPKKController@deletePBM');
Route::post('/pelayanan-kapal/pengajuan-pkk/save', 'PelayananKapal\PengajuanPKKController@save');
Route::post('/pelayanan-kapal/pengajuan-pkk/kirim', 'PelayananKapal\PengajuanPKKController@kirim');

Route::get('/get/pelabuhan/{pelabuhan}/dermaga', 'ApiController@getDermagaByPelabuhan');

