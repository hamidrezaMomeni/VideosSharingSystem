<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\VideosController;
use App\Http\Controllers\CategoryVideoController;

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/videos', [VideosController::class, 'index'])->name('videos.index');
Route::get('/videos/create', [VideosController::class, 'create'])->name('videos.create');
Route::post('/videos', [VideosController::class, 'store'])->name('videos.store');
Route::get('videos/{video:slug}', [VideosController::class, 'show'])->name('videos.show');
Route::get('videos/{video}/edit', [VideosController::class, 'edit'])->name('videos.edit');
Route::put('videos/{video}', [VideosController::class, 'update'])->name('videos.update');

Route::get('/categories/{category:slug}/videos', [CategoryVideoController::class, 'index'])->name('categories.videos.index');