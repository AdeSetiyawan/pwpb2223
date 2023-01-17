<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TambahDataBarangController;
use App\Http\Controllers\TampilDataBarangController;
use App\Http\Controllers\HapusDataBarangController;
use App\Http\Controllers\PerbaruiDataBarangController;

Route::get('/',[DashboardController::class,'index']);
Route::get('/tambah',[TambahDataBarangController::class,'index']);
Route::get('/tampil',[TampilDataBarangController::class,'index']);
Route::get('/hapus',[HapusDataBarangController::class,'index']);
Route::get('/perbarui',[PerbaruiDataBarangController::class,'index']);

