<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelayananKapal\Nota4AController;
use App\Http\Controllers\PelayananKapal\PermohonanAirController;
use App\Http\Controllers\PelayananKapal\PermohonanPanduTundaController;


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


    //route untuk permohonan pandu-tunda  
    Route::get('/pandu-tunda', 'PelayananKapal\PermohonanPanduTundaController@show');
   // Route::get('admin/pelayanan-kapal/pandu-tunda/pandu-tunda-create/{rpkro_id}', [PermohonanPanduTundaController::class,'detailPandu']);
    Route::get('pandu-tunda/pandu-tunda-create/{rpkro_id}', [PermohonanPanduTundaController::class,'detailPandu']);
    Route::get('pandu-tunda/pandu-tunda-view/{rpkro_id}', [PermohonanPanduTundaController::class,'detailView']);
    Route::post('pandu-tunda/pandu-tunda-create/simpan', [PermohonanPanduTundaController::class,'tambahDataPanduTunda']);
   
    //Route untuk permohonan Air
    Route::get('/air', 'PelayananKapal\PermohonanAirController@show');
    Route::get('air/air-create/{rpkro_id}', [PermohonanAirController::class,'detailAir']);
    Route::post('air/air-create/simpan', [PermohonanAirController::class,'tambahDataAir']);
    Route::get('air/air-view/{rpkro_id}', [PermohonanAirController::class,'viewlAir']);

    //Route untuk Nota4A
    Route::get('/nota4a', 'PelayananKapal\Nota4AController@show');
    Route::get('nota4a/nota4a-detail/{rpkro_id}', [Nota4AController::class,'viewNota4A']);
    Route::get('nota4a/nota4a-terbit/{rpkro_id}', [Nota4AController::class,'terbitNota4A']);
    Route::post('nota4a/nota4a-terbit/simpan', [Nota4AController::class,'tambahNota']);
    

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
        return view('app/pelayanan-kapal/'.$menu, $data);
    });
});