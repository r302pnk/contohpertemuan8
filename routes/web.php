<?php

use App\Http\Controllers\PenggunaController;
use Illuminate\Support\Facades\Route;
Route::get('/',function(){
    return view('layout');
});
Route::get('pengguna/datasource', [PenggunaController::class, 'datasource']);
Route::resource('pengguna', PenggunaController::class);

