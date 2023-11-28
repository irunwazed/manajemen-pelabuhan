<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnekaUsaha\LahanController;
use App\Http\Controllers\AnekaUsaha\pranotaLahan;
use App\Http\Controllers\AnekaUsaha\sewaLahancreate;

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





// Route::prefix('/{user}/aneka-usaha')->group(function () {

//     Route::get('/', function ($user) {
//         $data = [
//             "user" => $user
//         ];
//         return view('app/aneka-usaha/', $data);
//     });

//     Route::get('/{menu}', function ($user, $menu) {
//         $data = [
//             "user" => $user
//         ];
//         return view('app/aneka-usaha/' . $menu, $data);
//     });
//     Route::get('/permohonan-sewa-lahan', [LahanController::class, 'listSewaLahan'])->name('listSewaLahan');
//     Route::get('/create-permohonan-sewa-lahan', [LahanController::class, 'companyInfo'])->name('companyInfo');
//     Route::get('/pranota-permohonan-sewa-lahan', [pranotaLahan::class, 'praNota'])->name('praNota');
//     Route::get('/perusahaan/{id}', [LahanController::class, 'companyinfoById']);
//     Route::get('/perusahaan-lokasi/{id}', [LahanController::class, 'lahaninfoById']);
//     Route::get('/perusahaan-sewa-detail', [pranotaLahan::class, 'praNota'])->name('praNota');
//     Route::post('/{user}/perusahaan-lahan-create', [LahanController::class, 'Lahancreate'])->name('lahanCreate');
// });
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
    Route::get('/permohonan-sewa-lahan', [LahanController::class, 'listSewaLahan'])->name('listSewaLahan');
    Route::get('/create-permohonan-sewa-lahan', [LahanController::class, 'companyInfo'])->name('companyInfo');
    Route::get('/pranota-permohonan-sewa-lahan', [pranotaLahan::class, 'praNota'])->name('praNota');
    Route::get('/perusahaan/{id}', [LahanController::class, 'companyinfoById']);
    Route::get('/perusahaan-lokasi/{id}', [LahanController::class, 'lahaninfoById']);
    Route::get('/perusahaan-sewa-detail', [pranotaLahan::class, 'praNota'])->name('praNota');
    Route::post('/{user}/perusahaan-lahan-create', [LahanController::class, 'Lahancreate'])->name('lahanCreate');
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
