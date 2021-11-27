<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Penginapan;
use Illuminate\Http\Request;

class Pemesanan_penginapanController extends Controller
{
    public function index()
    {
        // $psn_pelanggan=::all();
        $data_pemesanan_penginapan = Booking::all();
        return view('admin.psn_penginapan.index',['data_pemesanan_penginapan'=> $data_pemesanan_penginapan]);
    }

    public function edit($id){
        $pemesanan_penginapan= Booking::find($id);
         return view('admin/psn_penginapan/edit',['pemesanan_penginapan' => $pemesanan_penginapan]);
         //   dd($Booking);
     }
     public function update (Request $request,$id){
         $pemesanan_penginapan= Booking::find($id);
         $pemesanan_penginapan->update($request->all());
         return redirect('/admin/pemesanan_penginapan');
     }
}
