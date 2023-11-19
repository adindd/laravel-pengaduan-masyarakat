<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Authcontroller extends Controller
{
    function register(){
        return view('/register');
    }
     function store (Request $request){
        //var_dump($request->all());
        //Masuk data

        $data = DB::table("masyarakat")->insert([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make ($request->password),
            'telp' => $request->telp,
           
        ]);
     }  

}
