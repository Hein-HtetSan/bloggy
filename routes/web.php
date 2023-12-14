<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\LoginController;

// category group
Route::resource('backend/category', CategoryController::class);

// post group
Route::get('/posts/list', [PostController::class, 'index'])->name('PostList');
Route::get('/posts/detail/{id}', [PostController::class, 'detail'])->name('PostDetail');
Route::get('posts/create', [PostController::class, 'create'])->name('PostCreate');
Route::post('posts/store', [PostController::class, 'post'])->name('PostStore');
Route::get('posts/edit/{id}', [PostController::class, 'edit'])->name('PostEdit');
Route::get('posts/update/{id}', [PostController::class, 'update'])->name('PostUpdate');
Route::post('posts/delete/{id}', [PostController::class, 'destory'])->name('PostDelete');

// home group
Route::get('/', [HomeController::class, 'home'])->name('HomePage');
Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('DetailPage');
Route::get('/user/login', [HomeController::class, 'userLogin'])->name('UserLogin');
Route::get('/user/Register', [HomeController::class, 'userRegister'])->name('UserRegister');
Route::post('/user/store', [HomeController::class, 'store'])->name('UserStore');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/login', [LoginController::class, 'showLogin'])->name('ShowAdminLogin');
Route::post('admin/login', [LoginController::class, 'login'])->name('AdminLogin');
Route::get('admin/logout', [LoginController::class, 'logout'])->name('AdminLogout');

// admin
Route::get('admin/profile', [UserController::class, 'showAdminProfile'])->name('ShowAdminProfile');
Route::post('admin/profile/update', [UserController::class, 'updateAdminProfile'])->name('updateAdminProfile');