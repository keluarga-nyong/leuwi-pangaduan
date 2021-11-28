<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konten;

class KontenController extends Controller
{
    public function index()
    {
        $data_konten = \App\Models\Konten::all();
        return view('admin.konten.index',['data_konten'=> $data_konten]);
    }
    public function create(Request $request)
    {        
            $newImageName = $request->judul . '.' . 
            $request->gambar->extension();

            $request->gambar->move(public_path('konten'), $newImageName);
        

            $konten = Konten::create([
                'judul' => $request->input('judul'),
                'isi' => $request->input('isi'),
                'tag' => $request->input('tag'),
                'gambar' => $newImageName,
            ]);
        return redirect ("/admin/konten");
        // dd($request->all());
    }
    public function edit($id){
        $konten=\App\Models\Konten::find($id);
         return view('admin/konten/edit',['konten' => $konten]);
         //   dd($konten);
     }
     public function update (Request $request,$id){
        $gambar = $request->file('gambar');
        
        if ($gambar_update = ""){
            $konten->gambar=$konten->gambar;
        }
        else{
            $newImageName = $request->judul . '.' . 
            $request->gambar->extension();
            $request->gambar->move(public_path('gambar'), $newImageName);
        }
        $konten = Konten::find($id);
        $konten->judul = $request->input('judul');
        $konten->isi = $request->input('isi');
        $konten->tag = $request->input('tag');
        $konten->gambar = $newImageName;
        $konten->save();
         return redirect('/admin/konten');

     }
    public function event(){
        $konten = Konten::all()->where('tag','event');
        return view('user.event',['konten' => $konten,]);
        // dd($konten);
    }

    public function showEvent($id){
        $konten = Konten::find($id);
        return view('user/show',['konten' => $konten]);
    }
}
