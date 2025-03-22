<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/post', [PostController::class, 'getPost'])->name('post');
Route::get('/post/{slug}', [PostController::class, 'getPostbySlug'])->name('post_by_slug');
