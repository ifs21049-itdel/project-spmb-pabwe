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
    return view('dashboard.dashboard');
});

Route::get('/admisi', function () {
    return view('admisi.admisi');
});

Route::get('/admisi/sarjana', function () {
    return view('admisi.sarjana');
});

Route::get('/admisi/diploma', function () {
    return view('admisi.diploma');
});

Route::get('/admisi/sarjanaterapan', function () {
    return view('admisi.sarjanaTerapan');
});


