<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Artikel\PostController;
use App\Http\Controllers\Tentang\VisiController;
use App\Http\Controllers\Tentang\ProfilController;
use App\Http\Controllers\Artikel\KategoriController;
use App\Http\Controllers\Tentang\StrukturController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//--BACKEND--//

//Tentang
Route::resource('/profil', ProfilController::class);
Route::resource('/visi', VisiController::class);
Route::resource('/struktur', StrukturController::class);

//Artikel
Route::resource('/kategori', KategoriController::class);
Route::resource('/post', PostController::class);

//--END BACKEND--//
