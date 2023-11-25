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

//Route post Import
Route::post('/upload/save/import','EksportImport\EksportImportController@saveImportHeader');
Route::post('/upload-entitas', 'EksportImport\EksportImportController@saveEntitas');
Route::post('/dokumen-pendukung', 'EksportImport\EksportImportController@saveDokumenPendukung');
Route::post('/data-pengangkutan', 'EksportImport\EksportImportController@saveDataPengangkutan');
Route::post('/kemasan', 'EksportImport\EksportImportController@saveKemasan');
Route::post('/kontainer', 'EksportImport\EksportImportController@saveKontainer');
Route::post('/data-transaksi', 'EksportImport\EksportImportController@saveDataTransaksi');
Route::post('/data-barang', 'EksportImport\EksportImportController@saveDataBarang');
Route::post('/punguntan', 'EksportImport\EksportImportController@saveDataPunguntan');

//Route post Eksport

