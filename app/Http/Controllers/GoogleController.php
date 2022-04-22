<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function google_login()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {

        try {
            $user = Socialite::driver('google')->user();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
