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
/*
Route::get('/{user}', function ($user) {
    $data = [
        "user" => $user
    ];
    return view('pages/admin', $data);
});
*/
// Route App
require 'aneka-usaha/index.php';
require 'pelayanan-kapal/index.php';

