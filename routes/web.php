<?php
<<<<<<< HEAD

use Illuminate\Support\Facades\Route;
=======
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PelangganController;
>>>>>>> ee033f33a54df8f7a9e93fd3669f2077f4a96bc3

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD

get;
=======
Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: ' . $param1;
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: ' . $param1;
});

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/pegawai', [PegawaiController::class, 'index']);

Route::post('question/store', [QuestionController::class, 'store'])
    ->name('question.store');

Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::resource('pelanggan', PelangganController::class);
>>>>>>> ee033f33a54df8f7a9e93fd3669f2077f4a96bc3
