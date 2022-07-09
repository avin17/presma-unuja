<?php

use App\Models\presma;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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




Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'dashboard'
    ]);
})->middleware('auth');
Route::get('/dashboard/pengumuman', function () {
    return view('dashboard.pengumuman.index', [
        'title' => 'pengumuman'
    ]);
});
Route::resource('/dashboard/presma', DashboardPresmaController::class)->middleware('auth');
// Route::post('try', [DashboardPresmaController::class, 'store'])->name('try.store');
