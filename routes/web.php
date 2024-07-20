<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index'])->name('landing-page.index');

Route::get('/category', function () {
    return view('layouts.landing-page.category');
});

Route::get('{slug}/detail', [LandingPageController::class, 'detail'])->name('berita.detail');

Route::get('/login', [UserController::class, 'loginPage'])->name('login');
Route::post('/login', [UserController::class, 'loginAction'])->name('login.action');

Route::get('/register', [UserController::class, 'registerPage'])->name('register.page');
Route::post('/register', [UserController::class, 'registerAction'])->name('register.action');

Route::middleware('auth')->group(function(){
    Route::get('/logout', [UserController::class, 'destroy'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::prefix('/kategori')->group(function(){
        Route::get('/', [CategoryController::class, 'index'])->name('kategori.index');
        Route::delete('/', [CategoryController::class, 'destroy'])->name('kategori.destroy');
        Route::get('{id}/delete', [CategoryController::class, 'forceDestroy'])->name('kategori.forceDestroy');
        Route::get('/create', [CategoryController::class, 'create'])->name('kategori.create');
        Route::post('/create', [CategoryController::class, 'store'])->name('kategori.store');
        Route::get('{id}/edit', [CategoryController::class, 'edit'])->name('kategori.edit');
        Route::post('{id}/edit', [CategoryController::class, 'update'])->name('kategori.update');
    });

    Route::prefix('/berita')->group(function(){
        Route::get('/', [NewsController::class, 'index'])->name('berita.index');
        Route::get('/create', [NewsController::class, 'create'])->name('berita.create');
        Route::post('/create', [NewsController::class, 'store'])->name('berita.store');
        Route::get('{id}/edit', [NewsController::class, 'edit'])->name('berita.edit');
        Route::post('{id}/edit', [NewsController::class, 'update'])->name('berita.update');
        Route::delete('/', [NewsController::class, 'destroy'])->name('berita.destroy');
    });

    Route::prefix('/pengguna')->group(function(){
        Route::get('/', [UserController::class, 'index'])->name('pengguna.index');
        Route::get('/create', [UserController::class, 'create'])->name('pengguna.create');
        Route::post('/create', [UserController::class, 'store'])->name('pengguna.store');
        Route::get('/edit', [UserController::class, 'edit'])->name('pengguna.edit');
        Route::post('/edit', [UserController::class, 'update'])->name('pengguna.update');
        Route::delete('/', [UserController::class, 'destroy'])->name('pengguna.destroy');
    });
});