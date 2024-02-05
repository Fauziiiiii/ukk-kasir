<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        
            return view('auth.index');
        
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            "email"=> "required",
            "password"=> "required",
        ],[
            "email.required"=> "Email tidak boleh kosong!!",
            "password.required" => "Password tidak boleh kosong!!"
        ]);

        $dataLogin = [
            "email"=> $request->email,
            "password"=> $request->password
        ];

        if(Auth::attempt($dataLogin)){
            if(Auth::user()->role == 'admin'){
                return redirect('/dashboard');
            }else{
                return redirect()->route('dashboard');
            }
        }else{
            return redirect('')->withErrors('Email dan Password yang anda masukkan tidak sesuai')->withInput();
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
