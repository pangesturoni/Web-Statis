<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(){
        return view("form");
    }

    public function signup(Request $request)
    {
        //dd($request->all());
        $nama_depan=$request["nama_depan"];
        $nama_blkg=$request["nama_blkg"];
        $nama_lengkap = "$nama_depan $nama_blkg";
        return view('signup', compact('nama_lengkap'));
    }
}