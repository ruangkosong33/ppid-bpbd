<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Artikel\PostController;
use App\Http\Controllers\Tentang\VisiController;
use App\Http\Controllers\Tentang\DasarController;
use App\Http\Controllers\Tentang\WaktuController;
use App\Http\Controllers\Tentang\ProfilController;
use App\Http\Controllers\Tentang\StandarController;
use App\Http\Controllers\Artikel\KategoriController;
use App\Http\Controllers\Tentang\MaklumatController;
use App\Http\Controllers\Tentang\StrukturController;
use App\Http\Controllers\Tentang\KeputusanController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//--BACKEND--//
Route::middleware(['auth', 'roles:admin'])->group(function () {

    Route::prefix('admin')->group(function () {

        Route::get('/dashboard', [HomeController::class, 'admin'])->name('home.admin');

        //Tentang
        Route::resource('/profil', ProfilController::class);
        Route::resource('/visi', VisiController::class);
        Route::resource('/struktur', StrukturController::class);
        Route::resource('/dasar', DasarController::class);
        Route::resource('/maklumat', MaklumatController::class);
        Route::resource('/standar', StandarController::class);
        Route::resource('/waktu', WaktuController::class);
        Route::resource('/keputusan', KeputusanController::class);

        //Artikel
        Route::resource('/kategori', KategoriController::class);
        Route::resource('/post', PostController::class);
        //LOGOUT
        Route::get('logout', function () {
            Auth::logout();
        });
    });
});
//--END BACKEND--//
