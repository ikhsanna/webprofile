<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $request->validate([
            'nama' => 'required|string',
            'alamat' => 'required|string',
        ]);

        // Menyimpan data ke dalam tabel 'bio'
        DB::table('bio')->insert([
            
            'nama' => $request['nama'],
            'alamat' => $request['alamat'],

        ]);
        // return response()->json(['message' => 'Data berhasil disimpan']);
        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }
}
