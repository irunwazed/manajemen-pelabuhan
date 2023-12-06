<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnekaUsaha\LahanController;

Route::group(
    [
        'prefix' => 'aneka-usaha',
        'as'     => 'aneka-usaha.lahan.',
    ],

    function () {
        // Lahan
        Route::get('/', [LahanController::class, 'createPerlahan'])->name('create-permohonan-sewa-lahan');
        // Route::get('/lahan', [LahanController::class, 'index'])->name('lahan.index');
        Route::get('/LahanController', [LahanController::class, 'listSewaLahan'])->name('lahan.permohonan-sewa-lahan');


        // Bunker Route::get('/lahan/permohonan-sewa-lahan', [LahanController::class, 'lahansewaList'])->name('listSewaLahan');
        Route::get('/lahan/perusahaan-lahan-create', [LahanController::class, 'lahansewaListadd'])->name('lahansewaListadd');
        Route::post('/lahan/perusahaan-lahan-create', [LahanController::class, 'Lahancreate'])->name('lahanCreate');
        Route::post('/lahan/perusahaan-lahan-edit', [LahanController::class, 'LahanUpdate'])->name('LahanUpdate');

        Route::get('/lahan/create-permohonan-sewa-lahan', [LahanController::class, 'companyInfo'])->name('companyInfo');
        Route::get('/lahan/list-permohonan-sewa-lahan', [LahanController::class, 'res'])->name('res');


        //pranota
        Route::get('/lahan/pranota-permohonan-sewa-lahan', [pranotaController::class, 'praNota'])->name('praNota');
        Route::get('/lahan/list_to_pranota', [pranotaController::class, 'listPranota'])->name('listPranota');
    }

);
