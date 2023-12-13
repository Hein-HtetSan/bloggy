<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;


Route::get('/', function () {
    return "hello, welcome";
});

Route::get('/greeting', function(){
    return "Hello, greeting";
})->name('greeting');

Route::get('user/{id}', function($id) {
    return "User Id is $id";
});

Route::get('/info', function(){
    return redirect('/greeting');
});

Route::get('/post/list', [PostController::class, 'index'])->name('post#list');
Route::resource('backend/category', CategoryController::class);
