<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GoogleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('new-user',[UserController::class,'new_user']);

Route::post('register',[UserController::class,'register']);

Route::get('login',[UserController::class,'login']);

Route::get('check',[UserController::class,'check']);

Route::get('user',[UserController::class,'user']);

Route::get('admin',[UserController::class,'admin']);

Route::get('user-data',[AdminController::class,'getData']);

Route::get('logout',[UserController::class,'logout']);

Route::get('/auth/google/redirect',[GoogleController::class,'googleredirect'])->name('google');

Route::get('/auth/google/callback',[GoogleController::class,'googlecallback']);

