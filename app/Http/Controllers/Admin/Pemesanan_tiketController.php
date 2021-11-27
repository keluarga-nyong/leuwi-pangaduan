<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tiket;

class Pemesanan_tiketController extends Controller
{
    public function index()
    {
        // $psn_pelanggan=::all();
        $psn_tiket =  Tiket::all();
        return view('admin.psn_tiket.index',['psn_tiket'=> $psn_tiket]);
    }

    public function edit($id){
        $psn_tiket= Tiket::find($id);
         return view('admin/psn_tiket/edit',['psn_tiket' => $psn_tiket]);
         //   dd($tiket);
     }
     public function update (Request $request,$id){
         $psn_tiket= Tiket::find($id);
         $psn_tiket->update($request->all());
         return redirect('/admin/psntiket');
     }
}
