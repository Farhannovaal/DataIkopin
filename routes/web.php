<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\DashboardController;

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
    return view('layout.home');
});


Route::get('/home', function () {
    return view('layout.home');
});

Route::get('mahasiswa/add', function () {
    return view('mahasiswa.formData');
});
Route::get('dosen/add', function () {
    return view('dosen.formDosen');
});



Route::resource('mahasiswa', MahasiswaController::class);

Route::resource('dosen', DosenController::class);

Route::get('home', [DashboardController::class, 'getData'])->name('home');
