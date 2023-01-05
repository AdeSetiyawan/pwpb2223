<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TambahDataBarangController;
use App\Http\Controllers\TampilDataBarangController;
use App\Http\Controllers\HapusDataBarangController;
use App\Http\Controllers\PerbaruiDataBarangController;

Route::get('/',[DashboardController::class,'index']);
Route::get('/tambahdatabarang',[TambahDataBarangController::class,'index']);
Route::get('/tampildatabarang',[TampilDataBarangController::class,'index']);
Route::get('/hapusdatabarang',[HapusDataBarangController::class,'index']);
Route::get('/perbaruidatabarang',[PerbaruiDataBarangController::class,'index']);

