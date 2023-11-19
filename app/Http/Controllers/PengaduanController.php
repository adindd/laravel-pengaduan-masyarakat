<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\view\view;

class PengaduanController extends Controller
{
    function index(){
        
           //Query Builder
           //$pengaduan = DB::table('pengaduan')->get();
            //Elloquent ORM
           //$judul = "selamat datang";
           $pengaduan = Pengaduan::all();
           return view('table', ['pengaduan' => $pengaduan]);
        }
    
    function isi_laporan(){
        
        return view('isi_laporan');                                                                                                                                                                                                                    
    }    

    function home (){

        $judul = "halooo, selamat datang!!!";

        return view('home', ['TextJudul' => $judul]);

        
    }
    function update_pengaduan(){
        
        return view('update');   
    }
   
   


   

    
    

    function proses_tambah_pengaduan(Request $request){
       

        $request->validate([

            'isi_laporan' => 'required|min:5'
        ]);
        $nama_foto = $request->foto->getClientOriginalName();
        $request->foto->storeAs('public/image', $nama_foto);
        $isi_laporan = $request->isi_laporan;

        DB::table('pengaduan')->insert([
            'tgl_pengaduan' => date('Y-m-d'),
            'nik' => '001',
            'isi_laporan' => $isi_laporan,
            'foto' => $request->foto->getClientOriginalName(),
            'status' => '0'
        ]);

        return redirect('/table');
    }
    function proses_update_pengaduan(Request $request, $id){

        $request->validate([

            
        ]);

        $isi_laporan = $request->isi_laporan;
        
      

        DB::table('pengaduan')->where('id_pengaduan', $id)->update([
            'tgl_pengaduan' => date('Y-m-d'),
            'isi_laporan' => $isi_laporan,
            'foto' => '',
            'status' => '0'
        ]);

        return redirect('/table');
    }
    function hapus($id){
       DB::table('pengaduan')->where('id_pengaduan', '=', $id)->delete();

       return redirect()->back();
    }
    function detail($id){
        $pengaduan  = Pengaduan::where('id_pengaduan', $id)->first();
        //$tanggapan = Tanggapan::where('id_pengaduan', $id)->get();
        $tanggapan = DB::table('tanggapan')
        ->join ('petugas', 'petugas.id', '=', 'tanggapan.id_petugas')
        ->where ('tanggapan.id_pengaduan', $id)
        ->get();
        //select from tanggapan Join Petugas
        //return $tanggapan;
        return view ("detail_pengaduan", ["data"=> $pengaduan, 'tanggapan' => $tanggapan]);
        
        //$pengaduan = DB::table('pengaduan')
        //->where('id_pengaduan', '=', $id)
        //->first();
        //return view('/detail' ,['pengaduan' => $pengaduan]);
     }
     function update($id){
        $pengaduan = DB::table('pengaduan')->where('id_pengaduan', '=', $id)->first();
        return view('/update' ,['pengaduan' => $pengaduan]);
     }
   
      
     
    
}