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

    if(in_array(@$_POST['username'], $users) && @$_POST['password'] == "testing"){
        // print_r($_POST);
        header('Location: ' . "/".$_POST['username']);
        die();
    }else{
        header('Location: ' . "/login?message=Username dan Password salah!");
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
    Route::get('/{menu}', function ($user, $menu) {
        $data = [
            "user" => $user
        ];
        return view('app/pelayanan-kapal/'.$menu, $data);
    });
});

Route::prefix('/admin/pelayanan-barang')->group(function () {
    Route::get('/', function () {
        return view('app/pelayanan-barang');
    });
    Route::get('/{menu}', function ($menu) {
        return view('app/pelayanan-barang/'.$menu);
    });
});

Route::prefix('/admin/penyewaan-alat')->group(function () {
    Route::get('/', function () {
        return view('app/penyewaan-alat');
    });
    Route::get('/{menu}', function ($menu) {
        return view('app/penyewaan-alat/'.$menu);
    });
});

Route::prefix('/admin/aneka-usaha')->group(function () {
    Route::get('/', function () {
        return view('app/aneka-usaha');
    });
    Route::get('/{menu}', function ($menu) {
        return view('app/aneka-usaha/'.$menu);
    });
});


Route::get('/{user}', function () {
    return view('pages/admin');
});
