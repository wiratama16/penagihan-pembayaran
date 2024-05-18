<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\TransaksiController;
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
    return view('welcome');
});

Route::get('/login', function () {
    return view('signin');
});

Route::post('/login',[AuthController::class,'login'])->name('login.proses');

Route::get('/dashboard', function () {
    return view('welcome');
});

Route::get("/admin/dashboard", [DashboardController::class,'dashboard_admin'])->name("admin.dashboard");
Route::get("/admin/pelanggan", [pelangganController::class,'data_pelanggan'])->name("admin.pelanggan.data_pelanggan");
Route::get("/admin/pelanggan/tambah", [pelangganController::class,'tambah'])->name("admin.pelanggan.tambah_pelanggan");
Route::get("/admin/pelanggan/edit/{id}", [pelangganController::class,'edit'])->name("admin.pelanggan.edit_pelanggan");
Route::post("/admin/pelanggan/tambah", [pelangganController::class,'store'])->name("admin.pelanggan.store");
Route::post("/admin/pelanggan/edit", [pelangganController::class,'update'])->name("admin.pelanggan.update");
Route::delete("/admin/pelanggan/hapus/{id}", [pelangganController::class,'delete'])->name("admin.pelanggan.delete_pelanggan");
Route::post("/admin/transaksi/tambah", [TransaksiController::class,'store'])->name("admin.transaksi.store");

Route::get("/admin/laporan", [LaporanController::class,'laporan'])->name("admin.laporan.laporan");
Route::get("/admin/tranaksi/riwayat", [TransaksiController::class,'riwayat'])->name("admin.transaksi.riwayat_tagihan");
Route::get("/admin/transaksi/tagihan", [TransaksiController::class,'tagihan'])->name("admin.transaksi.tagihan");
Route::get("/admin/transaksi/tambah", [TransaksiController::class,'tambah'])->name("admin.transaksi.tambah_tagihan");
Route::get("/admin/transaksi/edit/{id}", [TransaksiController::class,'edit'])->name("admin.transaksi.edit_tagihan");
Route::delete("/admin/transaksi/hapus/{id}", [TransaksiController::class,'delete'])->name("admin.transaksi.delete_tagihan");