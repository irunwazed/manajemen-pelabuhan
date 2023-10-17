<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('pages/login');
});

Route::get('/admin', function () {
    return view('pages/admin');
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

Route::prefix('/admin/pelayanan-kapal')->group(function () {
    Route::get('/', function () {
        return view('app/pelayanan-kapal');
    });
    Route::get('/{menu}', function ($menu) {
        return view('app/pelayanan-kapal/'.$menu);
    });
});


