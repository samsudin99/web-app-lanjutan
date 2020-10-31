<?php

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
    return view('welcome');
});

Route::get("/about-me", function () {
    return "Nama Saya <b>Samsudin</b>";
});

Route::get("/Alamat", function () {
    return "jl.P.Antasari gg.Pondok wira 1";
});

Route::get("/Rutinits", function () {
    return "Kuliah sambil Bekerja";
});

Route::get("/status", function () {
    return "Mahasiswa";
});

Route::get("/Universitas", function () {
    return "Muhammadiyah Kalimantan Timur";
});

Route::get("/semester", function () {
    return "Semester 5";
});

Route::get("/Prodi", function () {
    return "Teknik Informatika";
});

use App\Http\Controllers\samsudinController;

Route::get("/samsudin/one", [samsudinController::class, "one"]);
Route::get("/samsudin/two", [samsudinController::class, "two"]);
Route::get("/samsudin/three", [samsudinController::class, "three"]);


use App\Http\Controllers\sudinController;

Route::get("/sudin/satu", [sudinController::class, "satu"]);
Route::get("/sudin/dua", [sudinController::class, "dua"]);
Route::get("/sudin/tiga", [sudinController::class, "tiga"]);



