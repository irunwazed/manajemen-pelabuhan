<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelayananBarang\Nota3B;
use App\Http\Controllers\PelayananBarang\Nota4B;
use App\Http\Controllers\Alat\PbauAlatController;
use App\Http\Controllers\AnekaUsaha\lahan\LahanController;
use App\Http\Controllers\AnekaUsaha\lahan\nota4GLahan;
use App\Http\Controllers\AnekaUsaha\lahan\pranotaController;
use App\Http\Controllers\PelayananBarang\PenumpukanBarang2B1;
use App\Http\Controllers\PelayananBarang\PengeluaranBarang2B2;
use App\Http\Controllers\Warehousing\PengeluaranBarangController;
use App\Http\Controllers\AnekaUsaha\BunkerController;

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
//hanya yang belum berhasil login bisa ke halaman login
Route::get('/login', 'LoginController@login')->name('login')->middleware('guest');

Route::post('/login', 'LoginController@doLogin')->middleware('guest');
Route::post('/logout', 'LoginController@doLogout');
Route::post('{user}/logout', 'LoginController@doLogout');
Route::post('{user}/{menu}/logout', 'LoginController@doLogout');

//Route halaman utama sesuai dengan user ke pembagian menu utama
Route::get('/{user}', function ($user) {
    $data = [
        "user" => $user
    ];
    return view('pages/admin', $data);
})->middleware('auth');//untuk setiap action ke main menu hrs logi dan terauthentikasi.

/*
Route::get('/admin/menu', function () {
    return view('pages/menu');
});
*/
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
        Route::get('/form-create/{pelayanan_kapal_id}', [Nota3B::class, 'form_create'])->name('form-3b');
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
        return view('app/pelayanan-barang/' . $menu, $data);
    });
});


//batas untuk route barang
//route untuk penyewaan alat
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
    Route::get('/form-4c/filter', 'Alat\PbauAlatController@indexNota4c');
    Route::get('/create-nota-4c/{id}', 'Alat\PbauAlatController@createNota4C');
    Route::get('/nota-4c/invoice/{id}', 'Alat\PbauAlatController@generateInvoice');
    Route::post('/submit-nota-4c/{id}', 'Alat\PbauAlatController@submitNota4c');
    
});
//batas penyewaan alat


//Route untuk aneka usaha
Route::get('/perusahaan/{id}', [LahanController::class, 'companyinfoById'])->name('companyinfoById');
Route::get('/perusahaan-lokasi/{id}', [LahanController::class, 'lahaninfoById'])->name('lahaninfoById');
//Route::get('/pranota-permohonan-sewa-lahan', [pranotaLahan::class, 'praNota'])->name('praNota');
Route::prefix('/{user}/aneka-usaha/')->group(function () {

    //permohonan Sewa 
    Route::get('/lahan/permohonan-sewa-lahan', [LahanController::class, 'lahansewaList'])->name('listSewaLahan');
    Route::get('/lahan/perusahaan-lahan-create', [LahanController::class, 'lahansewaListadd'])->name('lahansewaListadd');
    Route::post('/lahan/perusahaan-lahan-create', [LahanController::class, 'Lahancreate'])->name('lahanCreate');
    Route::post('/lahan/perusahaan-lahan-edit', [LahanController::class, 'LahanUpdate'])->name('LahanUpdate');

    Route::get('/lahan/create-permohonan-sewa-lahan', [LahanController::class, 'companyInfo'])->name('companyInfo');
    Route::get('/lahan/list-permohonan-sewa-lahan', [LahanController::class, 'res'])->name('res');


    //pranota
    Route::get('/lahan/pranota-permohonan-sewa-lahan/{id}', [pranotaController::class, 'praNota'])->name('praNota');

    Route::get('/lahan/detail-permohonan-sewa-lahan/{id}', [pranotaController::class, 'praNotaDetail'])->name('praNotaDetail');

    Route::get('/lahan/list_to_pranota/{id}', [pranotaController::class, 'listPranota'])->name('listPranota');

    Route::get('/create-pdf/{id}', [pranotaController::class, 'exportPdf']);


    //nota 4e
   //routing bunker
    Route::prefix('sewa-bunker')->group(function () {
    Route::get('/', [BunkerController::class, 'show'])->name('showBunker');
    Route::get('/formCreate', [BunkerController::class, 'formCreate'])->name('formCreate');
    Route::post('/getPerusahaan', [BunkerController::class, 'getPerusahaan'])->name('getPerusahaan');
    });
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
        return view('app/aneka-usaha/' . $menu, $data);
    });
    Route::get('/permohonan-sewa-detail', [LahanController::class, 'detailsewaLahan'])->name('sewalahandetail');
});


 //Route Keuangan
 
Route::prefix('/{user}/keuangan')->group(function () {
    Route::get('/', function ($user) {
        $data = [
            "user" => $user
        ];
        return view('app/keuangan', $data);
    });

    Route::get('/penerimaan', 'Keuangan\PenerimaanController@index')->name('penerimaan-list');
    Route::get('/penerimaan/{id}', 'Keuangan\PenerimaanController@detail');
    Route::get('/penerimaan-baru', 'Keuangan\PenerimaanController@create');
    Route::post('/penerimaan-baru', 'Keuangan\PenerimaanController@save');

    Route::get('/laporan-pendapatan', 'Keuangan\LaporanController@pendapatan')->name('laporan-pendapatan');

    Route::get('/neraca', 'Keuangan\NeracaController@index')->name('neraca');

    Route::get('/pembayaran', 'Keuangan\PembayaranController@index')->name('pembayaran-list');
    Route::get('/pembayaran/{id}', 'Keuangan\PembayaranController@detail');
    Route::get('/pembayaran-baru', 'Keuangan\PembayaranController@create');
    Route::post('/pembayaran-baru', 'Keuangan\PembayaranController@save');
});
//batas keuangan

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
        $data_header_peb = DB::table('t_header_peb')->get();
        $data_satuan = DB::table('m_satuan')->get();
        $data_kemasan = DB::table('m_kemasan')->get();
        $data_barang_pib = DB::table('t_data_barang_pib')
        ->join('m_satuan', 't_data_barang_pib.satuan_id', '=','m_satuan.satuan_id')
        ->join('t_header_pib', 't_data_barang_pib.header_pib_id', '=', 't_header_pib.header_pib_id')
        ->select('t_data_barang_pib.no_seri_barang','t_data_barang_pib.hs_code_barang','t_data_barang_pib.uraian_barang','t_data_barang_pib.harga_satuan','m_satuan.satuan','t_header_pib.no_pengajuan')
        ->get();
        $data_kontainer_pib = DB::table('t_kontainer_pib')
        ->join('t_header_pib', 't_kontainer_pib.header_pib_id', '=', 't_header_pib.header_pib_id')
        ->select('t_kontainer_pib.seri_kontainer','t_kontainer_pib.no_kontainer','t_kontainer_pib.ukuran_kontainer','t_kontainer_pib.type_kontainer','t_header_pib.no_pengajuan')
        ->get();
        $data_kemasan_pib = DB::table('t_kemasan_pib')
        ->join('t_header_pib', 't_kemasan_pib.header_pib_id', '=', 't_header_pib.header_pib_id')
        ->select('t_kemasan_pib.seri_kemasan','t_kemasan_pib.jumlah_kemasan','t_kemasan_pib.jenis_kemasan','t_kemasan_pib.merk_kemasan','t_header_pib.no_pengajuan')
        ->get();
        $data_dokumen_pendukung_pib = DB::table('t_dokument_pendukung_pib')
        ->join('t_header_pib', 't_dokument_pendukung_pib.header_pib_id', '=', 't_header_pib.header_pib_id')
        ->select('t_dokument_pendukung_pib.no_seri','t_dokument_pendukung_pib.jenis_dokumen','t_dokument_pendukung_pib.nomor_dokumen','t_dokument_pendukung_pib.tgl_dokumen','t_dokument_pendukung_pib.nama_file','t_header_pib.no_pengajuan')
        ->get();
        $data = [
            "user" => $user,
            "id_param" => "",
            "data_pelabuhan" => $data_pelabuhan,
            "data_jenis_impor" => $data_jenis_impor,
            "data_cara_bayar" => $data_cara_bayar,
            "data_jenis_ekspor" => $data_jenis_ekspor,
            "kategori_ekspor"=> $kategori_ekspor,
            "data_cara_dagang"=> $data_cara_dagang,
            "data_kemasan"=> $data_kemasan,
            "data_hs_code"=> $data_hs_code,
            "data_header_pib"=> $data_header_pib,
            "data_header_peb"=> $data_header_peb,
            "data_satuan"=> $data_satuan,
            "data_kemasan"=> $data_kemasan,
            "data_kontainer_pib"=> $data_kontainer_pib,
            "data_kemasan_pib"=> $data_kemasan_pib,
            "data_dokumen_pendukung_pib"=> $data_dokumen_pendukung_pib,
            "data_barang_pib"=> $data_barang_pib
        ];
        return view('app/eksport-import/'.$menu, $data);
    });
    Route::get('/{menu}/{id}', function ($user, $menu, $id) {
        $data = [
            "id_param" => $id,
            "user" => $user,
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
Route::post('/import/save_barang','EksportImport\ImportController@saveBarang');
Route::post('/import/save_kemasan','EksportImport\ImportController@saveKemasan');
Route::post('/import/save_kontainer','EksportImport\ImportController@saveKontainer');
Route::post('/import/save_entitas','EksportImport\ImportController@saveEntitas');
Route::post('/import/save_dokumen_pendukung','EksportImport\ImportController@saveDokumenPendukung');

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
Route::post('/Eksport/save_lartas','EksportImport\EksportController@saveLartas');
Route::post('/Eksport/save_pernyataan','EksportImport\EksportController@savePernyataan');

//Route manfest pengangkut
Route::post('/Manifest/data_umum','EksportImport\ManifestController@data_umum');
Route::post('/Manifest/bill_landing','EksportImport\ManifestController@bill_landing');
Route::post('/Manifest/lampiran','EksportImport\ManifestController@lampiran');
Route::post('/Manifest/hs_code','EksportImport\ManifestController@hscode');


//route warehousing
Route::prefix('/{user}/warehousing')->group(function () {
    Route::get('/', function ($user) {
        $data = [
            "user" => $user
        ];
        return view('app/warehousing', $data);
    });

    Route::get('/pengeluaran-barang', 'Warehousing\PengeluaranBarangController@show');
    Route::get('/pengeluaran-barang/view-pengeluaran-barang/{id_pengeluaran}', [PengeluaranBarangController::class,'viewPengeluaran']);
    Route::get('/pengeluaran-barang/create-pengeluaran-barang/{id_pengeluaran}', [PengeluaranBarangController::class,'addPengeluaran']);
    Route::post('/pengeluaran-barang/create-pengeluaran-barang/simpan', [PengeluaranBarangController::class,'tambahDataPengeluaran']);
    Route::get('/monitoring-warehousing', 'Warehousing\MonitoringWareHousingController@show');
    Route::get('/monitoring-warehousing/detail-monitoring-warehousing/{id_Gudang}', 'Warehousing\MonitoringWareHousingController@detailGudang');
   //update ririn
   Route::get('/penerimaan-barang', 'Warehousing\WarehousingController@index');
   Route::get('/penerimaan-barang/filter', 'Warehousing\WarehousingController@index');
   Route::get('/create-penerimaan-barang', 'Warehousing\WarehousingController@penerimaanBarangForm');
   Route::get('/edit-penerimaan-barang/{id}', 'Warehousing\WarehousingController@penerimaanBarangForm');
   Route::get('/view-penerimaan-barang/{id}', 'Warehousing\WarehousingController@viewPenerimaanBarangForm');
   Route::get('/penerimaan-barang/delete/{id}', 'Warehousing\WarehousingController@destroy');
   Route::delete('/penerimaan-barang-container/delete', 'Warehousing\WarehousingController@destroyContainer');
   Route::post('/submit-penerimaan-barang/{id}', 'Warehousing\WarehousingController@submitPenerimaanBarang');
   Route::get('/penerimaan-detail', 'Warehousing\WarehousingController@getDetail');
   Route::get('/container-detail/edit', 'Warehousing\WarehousingController@getContainerDetail');
   Route::post('/submit-container-detail/{id}', 'Warehousing\WarehousingController@submitPenerimaanContaner');


});


//route untuk usermanagement
Route::prefix('/{user}/management-user')->group(function () {

    Route::get('/', function ($user) {
        $data = [
            "user" => $user
        ];
        return view('app/management-user', $data);
    });
    Route::get('/user', 'User\UserController@user');
    Route::get('/user/filter', 'User\UserController@user');
    Route::get('/add-user', 'User\UserController@userForm');
    Route::get('/edit-user/{id}', 'User\UserController@userForm');
    Route::post('/submit-user/{id}', 'User\UserController@submitUser');
    
    Route::get('/group-user', 'User\UserController@groupUser');
    Route::get('/group-user/filter', 'User\UserController@groupUser');
    Route::get('/add-group-user', 'User\UserController@groupUserForm');
    Route::get('/edit-group-user/{id}', 'User\UserController@groupUserForm');
    Route::post('/submit-group-user', 'User\UserController@submitGroupUser');    
});

// Route App
require 'aneka-usaha/index.php';
require 'pelayanan-kapal/index.php';