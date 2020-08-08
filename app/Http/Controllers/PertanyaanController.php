<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    
    public function create(){
        return view('adminlte.blog.create');
    }

    public function store(Request $request){
        //dd($request->all());
        $request->validate([
            'judul' => 'required|unique:pertanyaan',
            'isi' => 'required',
        ]);
        $query = DB::table('pertanyaan')->insert([
            "judul" => $request["judul"],
            "isi" => $request["isi"]
        ]);
        return redirect('/pertanyaan')->with ('success', 'Pertanyaan terkirim!');

    }
    public function index(){
        $posts = DB::table('pertanyaan')->get();
        //dd ($posts);
        return view('adminlte.blog.index', compact('posts'));
    }

    public function show($id){
        $tampil = DB::table('pertanyaan')->where('id',$id)->first();
        //dd($tampil);
        return view('adminlte.blog.show', compact('tampil'));
    }


    public function edit($id){
        $edit = DB::table('pertanyaan')->where('id',$id)->first();
        //dd($edit);
        return view('adminlte.blog.edit', compact('edit'));
    }


    public function update($id, Request $request){
        $request->validate([
            'judul' => 'required|unique:pertanyaan',
            'isi' => 'required',
        ]);
        $query = DB::table('pertanyaan')
                ->where('id', $id)
                ->update([
                    'judul' => $request ['judul'],
                    'isi' => $request ['isi']
                    ]);

        return redirect('/pertanyaan')->with ('success', 'Update Question Complete!');
    }

    public function destroy($id) {
        $query = DB::table('pertanyaan')->where('id', $id)->delete();
        return redirect('/pertanyaan')->with ('succes', 'Delete Question Complete!');
    }
}
