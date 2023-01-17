<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TambahDataBarangController;
use App\Http\Controllers\LihatDataBarangController;
use App\Http\Controllers\HapusDataBarangController;
use App\Http\Controllers\PerbaruiDataBarangController;
use Illuminate\Support\Facades\Route;

Route::get('/',[DashboardController::class,'index']);
Route::get('/tambah',[TambahDataBarangController::class,'index']);
Route::get('/lihat',[LihatDataBarangController::class,'index']);
Route::get('/hapus',[HapusDataBarangController::class,'index']);
Route::get('/perbarui',[PerbaruiDataBarangController::class,'index']);
