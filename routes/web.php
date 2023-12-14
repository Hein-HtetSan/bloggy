<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

// category group
Route::resource('backend/category', CategoryController::class);

// post group
Route::get('/posts/list', [PostController::class, 'index'])->name('PostList');
Route::get('/posts/detail/{id}', [PostController::class, 'detail'])->name('PostDetail');
Route::get('posts/create', [PostController::class, 'create'])->name('PostCreate');
Route::post('posts/store', [PostController::class, 'post'])->name('PostStore');
Route::get('posts/edit/{id}', [PostController::class, 'edit'])->name('PostEdit');
Route::get('posts/update/{id}', [PostController::class, 'update'])->name('PostUpdate');

// home group
Route::get('/', [HomeController::class, 'home'])->name('HomePage');