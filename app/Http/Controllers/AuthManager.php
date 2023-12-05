<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    function login(){
        return view('login');
    }

    function regist(){
        return view('regist');
    }

    function loginPost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $profil = $request->only('email','password');
        if(Auth::attempt($profil)){
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with("errorLogin","Login information is not");
    }

    function registPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|confirmed',
        ]);
    
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
    
        $user = User::create($data);
    
        if (!$user) {
            return redirect(route('regist'))->with("errorRegist", "Registration failed! Please try again.");
        }
    
        return redirect(route('login'))->with("successRegist", "Registration success!.");
    }
    

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}

