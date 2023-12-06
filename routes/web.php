<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnekaUsaha\lahan\pranotaController;
use App\Http\Controllers\AnekaUsaha\lahan\pranotaLahan;
use App\Http\Controllers\AnekaUsaha\lahan\sewaLahancreate;
use App\Http\Controllers\AnekaUsaha\lahan\LahanController;

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
    //     1. agen-kapal
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

    if (in_array(@$_POST['username'], $users) && @$_POST['password'] == "testing") {
        // print_r($_POST);
        header('Location: ' . url('/' . $_POST['username']));
        die();
    } else {
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


    Route::post('/pengajuan-pkk/upload/manifest-penumpang', 'PelayananKapal\PengajuanPKKController@manifestPenumpang');


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
    Route::get('/{menu}', function ($user, $menu) {
        $data = [
            "user" => $user
        ];
        return view('app/penyewaan-alat/' . $menu, $data);
    });
});

//dropdown list perusahaan &lokasi
Route::get('/perusahaan/{id}', [LahanController::class, 'companyinfoById'])->name('companyinfoById');
Route::get('/perusahaan-lokasi/{id}', [LahanController::class, 'lahaninfoById'])->name('lahaninfoById');


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
