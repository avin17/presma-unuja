<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\DashboardPresmaController;


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
    return view('landing.home', [
        'title' => 'premsa | unuja'
    ]);
});
Route::get('prestasi', function () {
    return view('landing.prestasi', [
        'title' => 'premsa | unuja'
    ]);
});
Route::get('kegiatan', function () {
    return view('landing.prestasi', [
        'title' => 'premsa | unuja'
    ]);
});
Route::get('/prestasi/detail', function () {
    return view('landing.detail.prestasi', [
        'title' => 'premsa | unuja'
    ]);
});
Route::get('detail', function () {
    return view('landing.detail.prestasi', [
        'title' => 'premsa | unuja'
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout']);
    Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    // ROUTE MAHASISWA
    Route::resource('/mahasiswa/presma', DashboardPresmaController::class, ['as' => 'mahasiswa'])->middleware('mahasiswa');
    // ROUTE STAF
    Route::get('/dashboard/pengumuman', function () {
        return view('dashboard.pengumuman.index', [
            'title' => 'pengumuman'
        ]);
    })->middleware('staf');
    Route::resource('/admin/presma', AdminDashboardController::class, ['as' => 'admin'])->middleware('staf');
});
