<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function new_user()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $reg = new User;
        $reg->firstname = $request->firstname;
        $reg->lastname = $request->lastname;
        $reg->email = $request->email;
        $reg->password = $request->password;
        $reg->dob = $request->dob;
        $reg->gender = $request->gender;
        $reg->income = $request->income;
        $reg->job = $request->job;
        $reg->family = $request->family;
        $reg->manglik = $request->manglik;
        $reg->partner_income = $request->partner_income;
        $reg->partner_job = $request->partner_job;
        $reg->partner_family = $request->partner_family;
        $reg->partner_manglik = $request->partner_manglik;
        $reg->save();

        return redirect()->back()
            ->with('success', 'User saved successfully');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function user()
    {
        return view('user');
    }

    public function admin()
    {
        return view('admin');
    }

    public function check(Request $request)
    {
        $check = User::where('email', $request->email)->first();

        if ($check->password == $request->password) {
            if ($check->role == 'admin') {
                return redirect('admin');
            } else {
                return redirect('user');
            }
        }
    }
}
