<?php

use App\Http\Controllers\PelayananBarang\Nota3B;
use App\Http\Controllers\PelayananBarang\Nota4B;
use App\Http\Controllers\PelayananBarang\PengeluaranBarang2B2;
use App\Http\Controllers\PelayananBarang\PenumpukanBarang2B1;
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
    Route::get('/rpkro/form', 'PelayananKapal\RPKROController@form');
    Route::post('/rpkro/form', 'PelayananKapal\RPKROController@save');
    Route::get('/rpkro/kirim', 'PelayananKapal\RPKROController@kirim');

    //PPK
    Route::get('/ppk', 'PelayananKapal\RPKROController@viewPPK');
    Route::get('/ppk/detail', 'PelayananKapal\RPKROController@detailPPK');
    Route::get('/ppk/detail/verifikasi', 'PelayananKapal\RPKROController@verifikasiPPK');

    //SPOG
    Route::get('/spog', 'PelayananKapal\SPOGController@list');
    Route::get('/spog/detail', 'PelayananKapal\SPOGController@detail');
    Route::post('/spog/detail', 'PelayananKapal\SPOGController@save');
    Route::get('/spog/kirim', 'PelayananKapal\SPOGController@kirim');
    Route::get('/spog/detail/verifikasi', 'PelayananKapal\SPOGController@detailVeri');
    Route::get('/spog/detail/verifikasi/do', 'PelayananKapal\SPOGController@verifikasi');
    Route::get('/spog/verifikasi', 'PelayananKapal\SPOGController@verifikasi');

    //  KEBERANGKATAN
    Route::get('/keberangkatan', 'PelayananKapal\KeberangkatanController@list');
    Route::get('/keberangkatan/crew', 'PelayananKapal\KeberangkatanController@crew');
    Route::post('/keberangkatan/crew', 'PelayananKapal\KeberangkatanController@importCrewList');
    Route::get('/keberangkatan/{pelayanan_kapal_id}/crew-list/delete/{kode}', 'PelayananKapal\KeberangkatanController@deleteCrewList');
    Route::get('/keberangkatan/kirim', 'PelayananKapal\KeberangkatanController@kirim');

    // KEPELAUTAN
    Route::get('/kepelautan/list', 'PelayananKapal\KepelautanController@list');
    Route::get('/kepelautan/detail', 'PelayananKapal\KepelautanController@detail');
    Route::get('/kepelautan/verifikasi', 'PelayananKapal\KepelautanController@verifikasi');

    // LK3
    Route::get('/lk3', 'PelayananKapal\LK3Controller@list');
    Route::get('/lk3/detail', 'PelayananKapal\LK3Controller@detail');
    Route::get('/lk3/verifikasi', 'PelayananKapal\LK3Controller@verifikasi');



    // SPB
    Route::get('/spb', 'PelayananKapal\SPBController@list');
    Route::get('/spb/detail', 'PelayananKapal\SPBController@detail');
    Route::get('/spb/verifikasi', 'PelayananKapal\SPBController@verifikasi');

    Route::get('/monitor', 'PelayananKapal\MonitorController@show');

    Route::get('/{menu}', function ($user, $menu) {
        $data = [
            "user" => $user
        ];
        return view('app/pelayanan-kapal/' . $menu, $data);
    });
});

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
        return view('app/pelayanan-barang/' . $menu, $data);
    });
});

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

Route::prefix('/{user}/management-user')->group(function () {
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
        return view('app/aneka-usaha/' . $menu, $data);
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
