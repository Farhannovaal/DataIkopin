<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\cekLevel;

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

Route::get('/home',[DashboardController::class, 'getData'],function() {
    return view('layout.home');
});


Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'registerPost'])->name('registerPost');
Route::get('/login',[LoginController::class,'halamanLogin'])->name('login');
Route::post('/loginPost',[LoginController::class,'loginPost'])->name('loginPost');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

// Route::get('/home', function () {
//     return view('layout.home');
// });


Route::get('/pmb', function(){
    return view('pmb.pmbIndex');
});
Route::get('/', [DashboardController::class, 'getData'])->name('home');
Route::resource('mahasiswa', MahasiswaController::class);

Route::resource('dosen', DosenController::class);


Route::group(['middleware' => ['auth','ceklevel:admin,operator']], function(){
    Route::get('mahasiswa/add', function () {
        return view('mahasiswa.formData');
    });
    Route::get('dosen/add', function () {
        return view('dosen.formDosen');
    });
});

