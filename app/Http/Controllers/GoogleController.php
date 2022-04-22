<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GoogleController extends Controller
{
    public function googleredirect(Request $request)
    {
        return Socialite::driver('google')->redirect();
    }

    public function googlecallback(Request $request)
    {
        $userdata = Socialite::driver('google')->stateless()->user();

        $user = User::where('email', $userdata->email)->where('auth_type', 'google')->first();

        if ($user) {
            $request->session()->put('loginId', $user->firstname);
            return redirect('user');
        } else {

            $uuid = Str::uuid()->toString();
            $user = new User;
            $user->firstname = $userdata->name;
            $user->lastname = "none";
            $user->dob = "22 April 1995";
            $user->gender = "Male";
            $user->income = "50000";
            $user->job = "private";
            $user->family = "joint family";
            $user->manglik = "yes";
            $user->partner_income = "50000";
            $user->partner_job = "government job";
            $user->partner_family = "joint family";
            $user->partner_manglik = "yes";
            $user->email = $userdata->email;
            $user->password = Hash::make($uuid . now());
            $user->auth_type = 'google';
            $user->save();

            $request->session()->put('loginId', $user->firstname);
            return redirect('user');
        }
    }
}
