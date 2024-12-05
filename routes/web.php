<?php

use App\Http\Controllers\PenggunaController;
use Illuminate\Support\Facades\Route;
Route::get('/',function(){
    return view('layout');
});
Route::resource('pengguna', PenggunaController::class);

