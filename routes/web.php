<?php

use App\Http\Controllers\anasayfaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HakkımdaController;
use App\Http\Controllers\iletController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});





//Route::get('/home',[\App\Http\Controllers\AppController::class,'index']);
Route::get('/Anasayfa',[anasayfaController::class,'index1'])->name('anasayfa');
Route::get('/Hakkımda',[HakkımdaController::class,'index2'])->name('hakkımda');
Route::get('/Blog',[BlogController::class,'index3'])->name('blog');
Route::get('/Ilet',[iletController::class,'index4'])->name('ilet');
