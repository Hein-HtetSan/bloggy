<?php

use Illuminate\Support\Facades\Route;


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
