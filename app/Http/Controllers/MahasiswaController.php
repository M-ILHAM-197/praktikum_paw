<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswa = DB::table('tbl_mahasiswa')->get();
        return view('index',['mahasiswa'=> $mahasiswa], ["title" => "Home"]);
    }
    public function inputdata(){
        return view('/inputdata',["title" => "Input"]);
    }
    public function input(Request $input){
        DB::table('tbl_mahasiswa')->insert([
            'nrp' => $input->nrp,
            'nama' => $input->nama,
            'email' => $input->email,
            'alamat' => $input->alamat
        ]);
        return redirect('/index');
    }
    public function edit($no){
        $mahasiswa = DB::table('tbl_mahasiswa')->where('no',$no)->get();
        return view('edit',['mahasiswa'=> $mahasiswa], ["title" => "Input"]);
    }
    public function update(Request $input){
        DB::table('tbl_mahasiswa')->where('no',$input->no)->update([
            'no' => $input->no,
            'nrp' => $input->nrp,
            'nama' => $input->nama,
            'email' => $input->email,
            'alamat' => $input->alamat
        ]);
        return redirect('/index');
    }
    public function hapus($no){
        DB::table('tbl_mahasiswa')->where('no',$no)->delete();
        return redirect('/index');
    }
    public function aboutme(){
        return view('/aboutme');
    }
}
