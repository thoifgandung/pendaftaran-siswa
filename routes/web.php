<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PendaftaranSiswaController;

Route::get('/pendaftaran-siswa/create', [PendaftaranSiswaController::class, 'create'])->name('pendaftaran_siswa.create');
Route::post('/pendaftaran-siswa/store', [PendaftaranSiswaController::class, 'store'])->name('pendaftaran_siswa.store');
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
    return view('pendaftaran_siswa/create');
});
