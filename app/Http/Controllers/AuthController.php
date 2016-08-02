<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('Auth.login');
    }


    public function getLogout()
    {
        Auth::logout();
        return Redirect::route('sessions');
    }



    public function postLogin(Request $request)
    {

        $user=[

            'username' => $request->get('username'),
            'password' => $request->get('password'),
        ];


       if (Auth::attempt($user)) {
            return Redirect::route('sessions');}

        return  Redirect::route('login');
    }

}
