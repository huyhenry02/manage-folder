<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\DocumentController;

Route::get('/', static function () {
    return view('index');
});

Route::group([
    'prefix' => 'auth'
], static function () {
    Route::get('/login', [AuthController::class, 'show_login'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'postLogin'])->name('auth.post_login');
    Route::get('/logout', [AuthController::class, 'postLogout'])->name('auth.logout');
});

Route::group([
    'prefix' => 'document'
], static function () {
    Route::get('/', [DocumentController::class, 'show_index'])->name('document.index');
    Route::get('/create', [DocumentController::class, 'show_create'])->name('document.create');
    Route::get('/update', [DocumentController::class, 'show_update'])->name('document.update');
    Route::get('/detail', [DocumentController::class, 'show_detail'])->name('document.detail');

    Route::post('/create', [DocumentController::class, 'createDocument'])->name('document.store');
});

Route::group([
    'prefix' => 'user'
], static function () {
    Route::get('/', [UserController::class, 'show_index'])->name('user.index');
    Route::get('/create', [UserController::class, 'show_create'])->name('user.create');
    Route::get('/update', [UserController::class, 'show_update'])->name('user.update');
    Route::get('/detail', [UserController::class, 'show_detail'])->name('user.detail');
});

Route::group([
    'prefix' => 'folder'
], static function () {
    Route::get('/', [FolderController::class, 'show_index'])->name('folder.index');
    Route::get('/update', [FolderController::class, 'show_update'])->name('folder.update');
    Route::get('/detail', [FolderController::class, 'show_detail'])->name('folder.detail');

    Route::post('/', [FolderController::class, 'store'])->name('folder.store');
});

