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
Route::get('/postar/create', [PostarController::class, 'create']);
Route::get('/foto/create', [FotoController::class, 'create']);
Route::get('/user/home', [HomeController::class, 'create']);
Route::get('/user/foto', [FotoController::class, 'create']);
Route::get('/user/login', [UserController::class, 'create']);
Route::get('/user/aviso', [AvisoController::class, 'create']); 