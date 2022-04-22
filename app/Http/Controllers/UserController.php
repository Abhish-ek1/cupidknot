<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

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
        $me = User::where('firstname', "james")->first();

        $others = User::all();

        $percentages = [];
        foreach ($others as $other) {
            $i = 0;
            if ($me->gender == $other->gender) {
                continue;
            } else {
                if ($me->email == $other->email) {
                    continue;
                } else {
                    if ($me->manglik == $other->manglik) {
                        $count = $i++;
                    }
                    if ($me->job == $other->job) {
                        $count = $i++;
                    }
                    if ($me->family == $other->family) {
                        $count = $i++;
                    }
                    $qualities = 3;

                    $percent = $i / $qualities;
                    $convert = $percent * 100;
                    array_push($percentages, $convert,$other->firstname);
                }
            }
        }

        return view('user', ['percentages' => $percentages, 'others' => $others, 'me' => $me]);
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
                $request->session()->put('loginId',$check->id);
                return redirect('admin');
            } else {
                $request->session()->put('loginId',$check->id);
                return redirect('user');
            }
        }
    }

    public function logout(){
          if(Session::has('loginId')){
              Session::pull('loginId');
          }return redirect('login');
    }
}
