<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenginapanController extends Controller
{
    public function index()
    {
        $data_penginapan = \App\Models\Penginapan::all();
        return view('admin.penginapan.index',['data_penginapan'=> $data_penginapan]);
    }
    public function create(Request $request)
    {
        \App\Models\Penginapan::create($request->all());
        return redirect ("/admin/penginapan");
    }
    public function edit($id){
        $penginapan=\App\Models\Penginapan::find($id);
         return view('admin/penginapan/edit',['penginapan' => $penginapan]);
         //   dd($penginapan);
     }
     public function update (Request $request,$id){
         $penginapan=\App\Models\Penginapan::find($id);
         $penginapan->update($request->all());
         return redirect('/admin/penginapan');
     }
     public function delete ($id)
    {
        $penginapan = \App\Models\Penginapan::find($id);
        $penginapan->delete();
        return redirect('/admin/penginapan')->with('sukses','data berhasil dihapus');
    }
}
