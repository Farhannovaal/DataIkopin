<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function halamanLogin(){
        return view('login.loginApp');
    }

    public function loginPost(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/home');
        }
        return redirect('/login')->with('error', 'Password atau Email yang Anda masukkan tidak benar');
    }

    public function logout(){
       Auth::logout();
       return redirect('/login');
    }
}
