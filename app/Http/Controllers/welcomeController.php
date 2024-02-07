<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    //
    public function landing(){
        return view ('landing');
    }
    public function index(){
        return view ('welcome');
    }
    public function kirim(request $request){
        $nama = $request ['nama'];
        $alamat = $request ['alamat'];
        $jk = $request ['jk'];
        return view ('welcome',['nama'=>$nama, 'alamat'=>$alamat, 'jk' =>$jk]);
    }
}
