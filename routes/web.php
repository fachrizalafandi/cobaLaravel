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
    $nama = "Rizal Afandi";
    return view('index', ['nama' => $nama]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});
