<?php

use App\Http\Controllers\AvisoController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostarController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/create', [UserController::class, 'create']);
Route::get('/home/create', [HomeController::class, 'create']);
Route::get('/aviso/create', [AvisoController::class, 'create']);
Route::get('/user/postar', [PostarController::class, 'create']);#funciona 
Route::post('/user/postar', [PostarController::class, 'store']);
Route::get('/foto/create', [FotoController::class, 'create']);
Route::get('/user/home', [HomeController::class, 'create'])->name('home');#funciona 
Route::get('/user/home.html', [HomeController::class, 'create']);#funciona 
Route::get('/user/foto', [FotoController::class, 'create']);
Route::get('/user/login', [UserController::class, 'create']);
Route::get('/user/aviso', [AvisoController::class, 'create']);
Route::get('/user/login.html', [UserController::class, 'create']);#funciona 
Route::get('/user/aviso.html', [AvisoController::class, 'create']);#funciona 
Route::get('/user/foto', [FotoController::class, 'create']);#funciona 

