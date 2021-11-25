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
}
