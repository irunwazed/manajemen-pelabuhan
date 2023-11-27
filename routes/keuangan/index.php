<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Keuangan\PenerimaanController;

Route::group(
    [
        'prefix' => 'keuangan',
        'as'     => 'keuangan.',
    ],

    function () {
        // Pembayaran
        Route::post('/penerimaan/list', [PenerimaanController::class, 'list'])->name('penerimaan.list');
    }

);
