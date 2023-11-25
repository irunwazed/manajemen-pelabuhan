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
    header("Location: login");
    die();
});

Route::get('/login', 'LoginController@login');

Route::post('/login', 'LoginController@doLogin');


Route::get('/admin/menu', function () {
    return view('pages/menu');
});

Route::get('/tes', function () {
    return view('temp/res');
});


// Route::get('/admin/pelayanan-kapal', function () {
//     return view('app/pelayanan-kapal');
// });

Route::prefix('/{user}/pelayanan-kapal')->group(function () {
    Route::get('/', function ($user) {
        $data = [
            "user" => $user
        ];
        return view('app/pelayanan-kapal', $data);
    });
    Route::get('/simlala', 'PelayananKapal\SimlalaController@show');
    Route::get('/warta', 'PelayananKapal\WartaController@show');
    Route::post('/generate-pkk', 'PelayananKapal\WartaController@generatePengajuanPKK');
    Route::get('/pengajuan-pkk', 'PelayananKapal\PengajuanPKKController@show');
    Route::get('/detail-pkk', 'PelayananKapal\PengajuanPKKController@detail');


    Route::post('/pengajuan-pkk/upload/manifest-penumpang', 'PelayananKapal\PengajuanPKKController@manifestPenumpang');
    Route::get('/pengajuan-pkk/{id}/delete/manifest-penumpang', 'PelayananKapal\PengajuanPKKController@deleteManifestPenumpang');

    Route::post('/pengajuan-pkk/upload/manifest-bb', 'PelayananKapal\PengajuanPKKController@manifestBB');
    Route::get('/pengajuan-pkk/{id}/delete/manifest-bb', 'PelayananKapal\PengajuanPKKController@deleteManifestBB');

    Route::post('/pengajuan-pkk/upload/manifest-bk', 'PelayananKapal\PengajuanPKKController@manifestBK');
    Route::get('/pengajuan-pkk/{id}/delete/manifest-bk', 'PelayananKapal\PengajuanPKKController@deleteManifestBK');

    Route::post('/pengajuan-pkk/crew-list/import', 'PelayananKapal\PengajuanPKKController@importCrewList');
    Route::get('/pengajuan-pkk/{pelayanan_kapal_id}/crew-list/delete/{kode}', 'PelayananKapal\PengajuanPKKController@deleteCrewList');
    
    Route::post('/pengajuan-pkk/kargo/import', 'PelayananKapal\PengajuanPKKController@importKargo');
    Route::get('/pengajuan-pkk/{pelayanan_kapal_id}/kargo/delete/{kode}', 'PelayananKapal\PengajuanPKKController@deleteKargo');
    
    Route::post('/pengajuan-pkk/kontainer/import', 'PelayananKapal\PengajuanPKKController@importKontainer');
    Route::get('/pengajuan-pkk/{pelayanan_kapal_id}/kontainer/delete/{kode}', 'PelayananKapal\PengajuanPKKController@deleteKontainer');
    
    Route::post('/pengajuan-pkk/barang-berbahaya/import', 'PelayananKapal\PengajuanPKKController@importBrgBerbahaya');
    Route::get('/pengajuan-pkk/{pelayanan_kapal_id}/barang-berbahaya/delete/{kode}', 'PelayananKapal\PengajuanPKKController@deleteBrgBerbahaya');
    
    Route::post('/pengajuan-pkk/manifest-barang-tercemar/save', 'PelayananKapal\PengajuanPKKController@saveBrgTercemar');

    Route::post('/pengajuan-pkk/dokumen-kapal/save', 'PelayananKapal\PengajuanPKKController@saveDokumenKapal');
    Route::get('/pengajuan-pkk/{pelayanan_kapal_id}/dokumen-kapal/delete/{kode}', 'PelayananKapal\PengajuanPKKController@deleteDokumenKapal');

    Route::post('/pengajuan-pkk/bongkar-muat/save', 'PelayananKapal\PengajuanPKKController@saveBongkarMuat');

    //Verifikasi PKK
    Route::get('/verifikasi-pkk', 'PelayananKapal\VerifikasiPKKController@index');
    Route::get('/verifikasi-pkk/form/{pelayanan_kapal_id}', 'PelayananKapal\VerifikasiPKKController@form');
    Route::get('/verifikasi-pkk/detail/{pelayanan_kapal_id}', 'PelayananKapal\VerifikasiPKKController@detail');
    Route::post('/verifikasi-pkk/setuju', 'PelayananKapal\VerifikasiPKKController@setuju');
    Route::post('/verifikasi-pkk/tolak', 'PelayananKapal\VerifikasiPKKController@tolak');

    //Verifikasi SPM
    Route::get('/verifikasi-spm', 'PelayananKapal\VerifikasiSPMController@index');
    Route::get('/verifikasi-spm/form/{pelayanan_kapal_id}', 'PelayananKapal\VerifikasiSPMController@form');
    Route::get('/verifikasi-spm/detail/{pelayanan_kapal_id}', 'PelayananKapal\VerifikasiSPMController@detail');
    Route::post('/verifikasi-spm/setuju', 'PelayananKapal\VerifikasiSPMController@setuju');
    Route::post('/verifikasi-spm/tolak', 'PelayananKapal\VerifikasiSPMController@tolak');


    // RKBM
    Route::get('/rkbm', 'PelayananKapal\RKBMController@show');
    Route::get('/form-rkbm', 'PelayananKapal\RKBMController@form');
    Route::post('/rkbm', 'PelayananKapal\RKBMController@saveRKBM');

    Route::get('/rkbm/barang', 'PelayananKapal\RKBMBarangController@show');
    Route::post('/rkbm/barang', 'PelayananKapal\RKBMBarangController@save');
    Route::get('/rkbm/barang/delete/{id}', 'PelayananKapal\RKBMBarangController@delete');
    
    Route::get('/rkbm/tkbm', 'PelayananKapal\RKBMController@tkbm');
    Route::post('/rkbm/tkbm', 'PelayananKapal\RKBMController@saveTKBM');
    Route::get('/rkbm/kirim', 'PelayananKapal\RKBMController@kirim');
    
    Route::get('/rkbm/verifikasi', 'PelayananKapal\RKBMController@verifikasi');
    Route::get('/rkbm/verifikasi/do', 'PelayananKapal\RKBMController@doVerifikasi');
    Route::get('/rkbm/verifikasi/{id}', 'PelayananKapal\RKBMController@verifikasiDetail');

    // RPKRO
    Route::get('/rpkro', 'PelayananKapal\RPKROController@list');
    
    
    Route::get('/{menu}', function ($user, $menu) {
        $data = [
            "user" => $user
        ];
        return view('app/pelayanan-kapal/'.$menu, $data);
    });
});

Route::prefix('/{user}/pelayanan-barang')->group(function () {
    Route::get('/', function ($user) {
        $data = [
            "user" => $user
        ];
        return view('app/pelayanan-barang', $data);
    });
    Route::get('/{menu}', function ($user, $menu) {
        $data = [
            "user" => $user
        ];
        return view('app/pelayanan-barang/'.$menu, $data);
    });
});

Route::prefix('/{user}/penyewaan-alat')->group(function () {
    Route::get('/', function ($user) {
        $data = [
            "user" => $user
        ];
        return view('app/penyewaan-alat', $data);
    });
    Route::get('/{menu}', function ($user, $menu) {
        $data = [
            "user" => $user
        ];
        return view('app/penyewaan-alat/'.$menu, $data);
    });
});

Route::prefix('/{user}/aneka-usaha')->group(function () {
    Route::get('/', function ($user) {
        $data = [
            "user" => $user
        ];
        return view('app/aneka-usaha', $data);
    });
    Route::get('/{menu}', function ($user, $menu) {
        $data = [
            "user" => $user
        ];
        return view('app/aneka-usaha/'.$menu, $data);
    });
});


Route::get('/{user}', function ($user) {
    $data = [
        "user" => $user
    ];
    return view('pages/admin', $data);
});

Route::get('/{user}', function ($user) {
    $data = [
        "user" => $user
    ];
    return view('pages/admin', $data);
});

// Route App
require 'aneka-usaha/index.php';

