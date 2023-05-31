<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index'])->name('index');
Route::get('posts/{id}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('home');
Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login_process', [\App\Http\Controllers\AuthController::class, 'login'])->name('login_process');
Route::get('/register', [\App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register_process', [\App\Http\Controllers\AuthController::class, 'register'])->name('register_process');
Route::get('/forum', [\App\Http\Controllers\AuthController::class, 'forum'])->name('forum');
Route::middleware("auth:web")->group(function () {
    Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

});
