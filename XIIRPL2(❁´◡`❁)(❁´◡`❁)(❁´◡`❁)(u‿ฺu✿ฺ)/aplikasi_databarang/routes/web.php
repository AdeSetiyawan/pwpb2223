<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TambahDataController;
use App\Http\Controllers\TampilDataController;
use App\Http\Controllers\HapusDataController;
use App\Http\Controllers\PerbaruiDataController;

Route::get('/',[HomeController::class,'index']);
Route::get('/tambah',[TambahDataController::class,'index']);
Route::get('/tampil',[TampilDataController::class,'index']);
Route::get('/hapus',[HapusDataController::class,'index']);
Route::get('/perbarui',[PerbaruiDataController::class,'index']);