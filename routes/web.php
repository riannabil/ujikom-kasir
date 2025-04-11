<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Models\Produk;
use Illuminate\Support\Facades\Route;


Route::get('/',[UserController::class,'landing'])->name('landing');
Route::get('/login',[UserController::class,'login'])->name('login');
Route::get('/register',[UserController::class,'register'])->name('register');
Route::post('/register',[UserController::class,'registerStore'])->name('register.store');
Route::post('/login',[UserController::class,'loginCheck'])->name('login.check');
Route::resource('users', UserController::class);

// dasboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::post('produk/cetak/label',[ProdukController::class,'cetakLabel'])->name('produk.cetakLabel');
    Route::PUT('produk/edit/{id}/tambahStok',[ProdukController::class,'tambahStok'])->name('produk.tambahStok');
    Route::get('produk/logproduk',[ProdukController::class,'logproduk'])->name('produk.logproduk');
    Route::resource('produk', ProdukController::class);
    Route::resource('penjualan', PenjualanController::class);
    Route::get('penjualan/bayarCash/{id}',[PenjualanController::class,'bayarCash'])->name('penjualan.bayarCash');
    Route::post('penjualan/bayarCash',[PenjualanController::class,'bayarCashStore'])->name('penjualan.bayarCashStore');
    Route::get('penjualan/nota/{id}',[PenjualanController::class,'nota'])->name('penjualan.nota');
});

