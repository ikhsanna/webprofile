<?php

namespace App\Http\Controllers;

use App\Mail\contact_me;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class contactController extends Controller
{
    public function show(){
        return view('master');
    }
    public function send(Request $request){
        $request = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'subject' => 'sometimes|min:3',
            'message' => 'sometimes|min:3',
        ]);

        DB::table('contact_me')->insert([
            'name' => $request['name'],
            'email' => $request['email'],
            'subject' => $request['subject'],
            'message' => $request['message'],
        ]);
        return redirect()->back()->with('success', 'Data berhasil dikirim');
        // return response()->json(['message' => 'Data berhasil disimpan']);
    } 

}

