<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
// untuk menggunakan controllers harus dipanggil dulu

Route::get('/',[DashboardController::class,'index']); 
//ini adalah landing page karena diberi jalur dengan nama "/"