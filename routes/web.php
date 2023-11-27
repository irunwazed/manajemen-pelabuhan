<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/login', function () {
    return view('pages/login');
});

Route::post('/login', function () {
// 1. agen-kapal
// 2. petugas-lala
// 3. pbm
// 4. bup
// 5. syahbandar
// 6. Pelindo-kapal
// 7. Pelindo-pbau
// 8. Pelindo-keuangan
// 9. admin

    $users = [
       "agen-kapal",
       "petugas-lala",
       "pbm",
       "bup",
       "syahbandar",
       "Pelindo-kapal",
       "Pelindo-pbau",
       "Pelindo-keuangan",
       "admin"
    ];

    if(in_array(@$_POST['username'], $users) && @$_POST['password'] == "testing"){
        // print_r($_POST);
        header('Location: ' .url('/'.$_POST['username']));
        die();
    }else{
        header('Location: ' . url('/login?message=Username dan Password salah!'));
        die();
    }

});


Route::get('/admin/menu', function () {
    return view('pages/menu');
});

Route::get('/tes', function () {
    return view('temp/res');
});

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


    Route::post('/pengajuan-pkk/upload/manifest-penumpang', 'PelayananKapal\PengajuanPKKController@manifestPenumpang');
    
    
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

Route::prefix('/{user}/eksport-import')->group(function () {
    
    Route::get('/', function ($user) {
        $data = [
            "user" => $user
        ];
        return view('app/eksport-import', $data);
    });

    Route::get('/{menu}', function ($user, $menu) {
        $data_pelabuhan = DB::table('m_pelabuhan')->get();
        $data_jenis_impor = DB::table('m_jenis_impor')->get();
        $data_jenis_ekspor = DB::table('m_jenis_ekspor')->get();
        $data_cara_bayar = DB::table('m_cara_bayar')->get();
        $kategori_ekspor = DB::table('m_kategroi_ekspor')->get();
        $data_cara_dagang = DB::table('m_cara_dagang')->get();
        $data_kemasan = DB::table('m_kemasan')->get();
        $data_hs_code = DB::table('m_hs_code')->get();
        $data_header_pib = DB::table('t_header_pib')->get();
        $data = [
            "user" => $user,
            "data_pelabuhan" => $data_pelabuhan,
            "data_jenis_impor" => $data_jenis_impor,
            "data_cara_bayar" => $data_cara_bayar,
            "data_jenis_ekspor" => $data_jenis_ekspor,
            "kategori_ekspor"=> $kategori_ekspor,
            "data_cara_dagang"=> $data_cara_dagang,
            "data_kemasan"=> $data_kemasan,
            "data_hs_code"=> $data_hs_code,
            "data_header_pib"=> $data_header_pib
        ];
        return view('app/eksport-import/'.$menu, $data);
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

// Route post Import
Route::post('/import/save_header','EksportImport\ImportController@saveHeader');
Route::post('/import/save_pengangkutan','EksportImport\ImportController@savePengangkutan');
Route::post('/import/save_transaksi','EksportImport\ImportController@saveTransaksi');
Route::post('/import/save_pernyataan','EksportImport\ImportController@savePernyataan');

//Route post export
Route::post('/Eksport/save_header','EksportImport\EksportController@saveHeader');
Route::post('/Eksport/save_entitas','EksportImport\EksportController@saveEntitas');
Route::post('/Eksport/save_pemilik','EksportImport\EksportController@savePemilikBarang');
Route::post('/Eksport/save_dokumen_pendukung','EksportImport\EksportController@saveDokumenPendukung');
Route::post('/Eksport/save_data_pengangkut','EksportImport\EksportController@saveDataPengangkut');
Route::post('/Eksport/save_sarana_angkut','EksportImport\EksportController@saveSaranaAngkut');
Route::post('/Eksport/save_kemasan','EksportImport\EksportController@saveKemasan');
Route::post('/Eksport/save_kontainer','EksportImport\EksportController@saveKontainer');
Route::post('/Eksport/save_data_transaksi','EksportImport\EksportController@saveTransaksi');
Route::post('/Eksport/save_bank_devisa','EksportImport\EksportController@saveDevisa');
Route::post('/Eksport/save_data_barang','EksportImport\EksportController@saveDataBarang');
Route::post('/Eksport/save_laras','EksportImport\EksportController@saveLartas');
Route::post('/Eksport/save_pernyataan','EksportImport\EksportController@savePernyataan');

//Route manfest pengangkut
Route::post('/Manifest/data_umum','EksportImport\EksportController@data_umum');
Route::post('/Manifest/bill_landing','EksportImport\EksportController@bill_landing');
Route::post('/Manifest/lampiran','EksportImport\EksportController@lampiran');
Route::post('/Manifest/hs_code','EksportImport\EksportController@hscode');

// Route App
require 'aneka-usaha/index.php';