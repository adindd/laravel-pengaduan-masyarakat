<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginPetugasController extends Controller
{
    public function index(){
       // return Hash::make("123");
        return view('auth.loginpetugas');
    }

    public function loginpetugas(Request $request){
        $data = $request->only('username', 'password');
        if (Auth::guard('petugas')->attempt($data)){
           return redirect('/petugas/home');
        }else {
            return redirect("/petugas/login");
        }
    }
    public function logout(){
            Auth::guard('petugas')->logout();
            return redirect ('/petugas/login');
    }

}