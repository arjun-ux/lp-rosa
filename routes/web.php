<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/post', [PostController::class, 'index'])->name('post');
Route::get('/post/{slug}', [PostController::class, 'show'])->name('post_by_slug');

