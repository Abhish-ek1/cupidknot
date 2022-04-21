<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('new-user',[UserController::class,'new_user']);

Route::get('register',[UserController::class,'register']);
