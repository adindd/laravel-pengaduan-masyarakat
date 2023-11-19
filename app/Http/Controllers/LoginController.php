<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    function index(){
        return view("login");
    }
    function login(Request $request){
        $dataLogin = $request->only("username", "password"); //ambil data

        
        if(Auth::attempt($dataLogin)){ //proses
            //return "hasil";
            return redirect ("/home");
        } else{
            // echo "gagal login";
           // return "gagal";
            return redirect ("/login");
        }
    }

    function logout(){
        Auth::logout();

        return redirect('/login');
    }
}

