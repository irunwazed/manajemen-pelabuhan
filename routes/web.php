<?php

use Illuminate\Support\Facades\DB;
use App\Models\PenumpukanBarang2B1;
use App\Models\PengeluaranBarang2B2;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelayananBarang\Nota3B;
use App\Http\Controllers\PelayananBarang\Nota4B;
use App\Http\Controllers\Alat\PbauAlatController;

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

//route untuk barang
Route::prefix('/{user}/pelayanan-barang')->group(function () {
    Route::get('/', function ($user) {
        $data = [
            "user" => $user
        ];
        return view('app/pelayanan-barang', $data);
    });
    

    Route::prefix('/pengeluaran-2b2')->group(function () {
        Route::get('/', [PengeluaranBarang2B2::class, 'show'])->name('get-2b2');
        Route::get('/form-create/{pelayanan_kapal_id}', [PengeluaranBarang2B2::class, 'form_create'])->name('form-2b2');
        Route::post('/create2B2', [PengeluaranBarang2B2::class, 'create2B2'])->name('create2B2');
    });

    Route::prefix('/nota-3b')->group(function () {
        Route::get('/', [Nota3B::class, 'show'])->name('nota-3b');
        Route::get('/form-create/{pelayanan_kapal_id}', [Nota3B::class, 'form_create'])->name('form-2b2');
        Route::post('/create3B', [Nota3B::class, 'create3B'])->name('create3B');
    });

    Route::prefix('/nota-4b')->group(function () {
        Route::get('/', [Nota4B::class, 'show'])->name('nota-4b');
        Route::get('/form-create/{pelayanan_kapal_id}', [Nota4B::class, 'form_create'])->name('form4B');
        Route::post('/create4B', [Nota4B::class, 'create4B'])->name('create4B');
    });

    Route::prefix('/penumpukan-2b1')->group(function () {
        Route::get('/', [PenumpukanBarang2B1::class, 'show'])->name('get-2b1');
        Route::get('/form-create/{pelayanan_kapal_id}', [PenumpukanBarang2B1::class, 'form_create'])->name('form-2b1');
        Route::post('/form-barang', [PenumpukanBarang2B1::class, 'getBarang'])->name('get-Barang');
        Route::post('/update-barang', [PenumpukanBarang2B1::class, 'updateBarang'])->name('update-Barang');
        Route::post('/create-2B1', [PenumpukanBarang2B1::class, 'create2B1'])->name('create-2B1');
    });

    Route::get('/{menu}', function ($user, $menu) {
        $data = [
            "user" => $user
        ];
        return view('app/pelayanan-barang/'.$menu, $data);
    });
});

//batas untuk route barang



Route::prefix('/{user}/penyewaan-alat')->group(function () {
    Route::get('/', function ($user) {
        $data = [
            "user" => $user
        ];
        return view('app/penyewaan-alat', $data);
    });

    //sub menu 1
    Route::get('/permohonan-1c', 'Alat\PbauAlatController@index');
    Route::get('/permohonan-1c/filter', 'Alat\PbauAlatController@index');
    Route::get('/create-permohonan-1c', 'Alat\PbauAlatController@create');
    Route::post('/submit-permohonan-1c/{id}', 'Alat\PbauAlatController@submitPermohonan');
    Route::post('/create-permohonan-1c/store', 'Alat\PbauAlatController@store');
    Route::post('/create-permohonan-1c/update', 'Alat\PbauAlatController@update');
    Route::get('/edit-permohonan-1c/{id}', 'Alat\PbauAlatController@editPermohonan');
    Route::get('/get-alat', 'Alat\PbauAlatController@getAlat');
    Route::get('/get-alat-detail', 'Alat\PbauAlatController@getAlatDetail');
    Route::get('/get-alat-detail/edit', 'Alat\PbauAlatController@edit');
    Route::delete('/get-alat-detail/delete', 'Alat\PbauAlatController@destroy');

    //sub menu 2
    Route::get('/bukti-2c', 'Alat\PbauAlatController@indexBukti2C');
    Route::get('/form-2c/filter', 'Alat\PbauAlatController@indexBukti2C');
    Route::get('/realisasi-bukti-1c/{id}', 'Alat\PbauAlatController@realisasiBukti');
    Route::post('/submit-realisasi-bukti-1c/{id}', 'Alat\PbauAlatController@submitTanggalBukti');
    Route::post('/submit-realisasi/{id}', 'Alat\PbauAlatController@submitRealisasi');
    Route::get('/get-tanggal-detail', 'Alat\PbauAlatController@getTanggalDetail');

    //sub menu 3
    Route::get('/nota-3c', 'Alat\PbauAlatController@indexNota3c');
    Route::get('/form-3c/filter', 'Alat\PbauAlatController@indexNota3c');
    Route::get('/create-nota-3c/{id}', 'Alat\PbauAlatController@createNota3c');
    Route::post('/submit-nota-3c/{id}', 'Alat\PbauAlatController@submitNota3c');

    //sub menu 4
    Route::get('/nota-4c', 'Alat\PbauAlatController@indexNota4c');
    Route::get('/create-nota-4c/{id}', 'Alat\PbauAlatController@createNota4C');
    Route::get('/nota-4c/invoice/{id}', 'Alat\PbauAlatController@generateInvoice');
    Route::post('/submit-nota-4c/{id}', 'Alat\PbauAlatController@submitNota4c');
    

    /*Route::resource('permohonan-1c', Alat\PbauAlatController::class)->parameters([
        'pbau-alat' => 'pbau_alat_1c_id',
    ])->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);

    /*Route::get('/{menu}', function ($user, $menu) {
        $data = [
            "user" => $user
        ];
        return view('app/penyewaan-alat/'.$menu, $data);
    });*/
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

//route untuk export import

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
require 'pelayanan-kapal/index.php';

