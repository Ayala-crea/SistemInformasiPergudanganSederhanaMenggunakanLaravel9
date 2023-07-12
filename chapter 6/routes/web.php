<?php

use App\Http\Controllers\AuthLogin;
use App\Http\Controllers\Pembelian;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\Penjualan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DetailBarangController;

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
    return view('index');
});
Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::controller(BarangController::class)->prefix('barang')->group(function() {
    Route::get('', 'index')->name('barang');
});
Route::controller(DetailBarangController::class)->prefix('detail_barang')->group(function() {
    Route::get('', 'index')->name('detail_barang');
    Route::get('tambah', 'tambah')->name('detail_barang.tambah');
    Route::post('tambah', 'simpan')->name('detail_barang.tambah.simpan');
    Route::get('edit/{id_barang}/{id_detail_barang}', 'edit')->name('detail_barang.edit');
    Route::post('update/{id_barang}/{id_detail_barang', 'update')->name('detail_barang.edit.update');
});
Route::controller(Penjualan::class)->prefix('penjualan')->group(function () {
    Route::get('', 'index')->name('penjualan');
    Route::get('tambah', 'tambah')->name('penjualan.tambah');
    Route::post('tambah', 'simpan')->name('penjualan.tambah.simpan');
    Route::get('edit/{id_penjualan}', 'edit')->name('penjualan.edit');
    Route::post('edit/{id_penjualan}', 'update')->name('penjualan.edit.update');
    Route::get('hapus/{id_penjualan}', 'hapus')->name('penjualan.hapus');
});
Route::controller(PembelianController::class)->prefix('pembelian')->group(function () {
    Route::get('', 'index')->name('pembelian');
    Route::get('tambah', 'tambah')->name('pembelian.tambah');
    Route::post('tambah', 'simpan')->name('pembelian.tambah.simpan');
    Route::get('edit/{id_pembelian}', 'edit')->name('pembelian.edit');
    Route::post('edit/{id_pembelian}', 'update')->name('pembelian.edit.update');
    Route::get('hapus/{id_pembelian}', 'hapus')->name('pembelian.hapus');
});
Route::get('/sesi', [AuthLogin::class, 'index'])->name('login');
Route::post('/sesi/login', [AuthLogin::class, 'login']);
Route::get('/sesi/logout', [AuthLogin::class, 'logout']);