<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnekaUsaha\LahanController;

Route::group(
    [
        'prefix' => 'aneka-usaha',
        'as'     => 'aneka-usaha.',
    ],

    function () {
        // Lahan
        Route::get('/lahan', [LahanController::class, 'index'])->name('lahan.index');
        Route::post('/lahan/list-sewa', [LahanController::class, 'listSewaLahan'])->name('lahan.list-sewa');


        // Bunker
    }

);