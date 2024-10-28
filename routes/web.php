<?php

use App\Http\Controllers\AvisoController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

// Rota para a página inicial
Route::get('/', function () {
    return view('welcome');
});

// Rotas para usuários
Route::prefix('user')->group(function () {
    Route::get('/create', [UserController::class, 'create']);
    Route::get('/login', [UserController::class, 'create'])->name('login.create');
    Route::post('/login', [UserController::class, 'store'])->name('login.store');
    Route::post('/upload', [UserController::class, 'upload'])->name('user.upload');

    // Rota para postar
    Route::get('/postar', [PostarController::class, 'create'])->name('postar.create');
    Route::post('/postar', [PostarController::class, 'store'])->name('postar.store');

    // Rota para aviso
    Route::get('/aviso', [AvisoController::class, 'create'])->name('aviso');
    //Route::get('/aviso', [AvisoController::class, 'create']);

    // Rota para foto
    Route::get('/foto', [FotoController::class, 'create']);
});

// Rotas para home
Route::get('/home/create', [HomeController::class, 'create']);
Route::get('/user/home', [HomeController::class, 'create'])->name('home');

// Rotas para login
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [UserController::class, 'login'])->name('login');

// Rotas para o LoginController
Route::get('/login/home', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login/home', [LoginController::class, 'login'])->name('login');
Route::post('/login/home', [LoginController::class, 'logout'])->name('logout');

// Rotas de foto
Route::get('/foto/create', [FotoController::class, 'create']);

