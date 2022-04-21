<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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
