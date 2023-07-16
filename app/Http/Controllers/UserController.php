<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginCheck(Request $r){
        if(Auth::attempt(['email' => $r->email, 'password' => $r->password])){
            $r->session()->regenerate();
            return redirect('/');
        }
    }

    public function logout(Request $r){
        $r->session()->invalidate();
        $r->session()->regenerate();
        return redirect('/login');
    }
}
