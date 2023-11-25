<?php

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

    Route::prefix('/pengeluaran-2b2')->group(function () {
        Route::get('/', [PengeluaranBarang2B2::class, 'show'])->name('get-2b2');
        Route::get('/form-create/{pelayanan_kapal_id}', [PengeluaranBarang2B2::class, 'form_create'])->name('form-2b2');
        Route::post('/create2B2', [PengeluaranBarang2B2::class, 'create2B2'])->name('create2B2');
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
    Route::get('/{menu}', function ($user, $menu) {
        $data = [
            "user" => $user
        ];
        return view('app/penyewaan-alat/' . $menu, $data);
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
