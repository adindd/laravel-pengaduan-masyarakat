<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class MasyarakatController extends Controller
{
    function table(){
       
           
           $masyarakat = DB::table('masyarakat')->get();
           return view('table_masyarakat', ['masyarakat' => $masyarakat]);
        }


    function registrasi(request $request){
        $nik = $request->nik;
        $nama = $request->nama;  
        $username = $request->username;
        $password = Hash::make($request->password);
        $telp = $request->telp;



        DB::table('masyarakat')->insert([
            'nik' => $nik,
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'telp' => $telp
        ]);

        return redirect('/login');
    }


     function buatakun(){
           return view('registrasi');
        }  
}
