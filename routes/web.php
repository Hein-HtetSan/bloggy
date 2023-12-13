<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

// category group
Route::get('/post/list', [PostController::class, 'index'])->name('post#list');
Route::resource('backend/category', CategoryController::class);


// home group
Route::get('/', [HomeController::class, 'home'])->name('HomePage');