<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    Public function new_user(){
        return view('auth.register');
    }
}
