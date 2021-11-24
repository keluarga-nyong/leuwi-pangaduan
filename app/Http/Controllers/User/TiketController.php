<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tiket;
use Auth;

class TiketController extends Controller
{
    //
    public function index()
    {
        return view('user.tiket.create');
    }

    public function pesan(Request $request)
    {
        $request->validate([
            'tanggal' =>'required',
            'dewasa' =>'required',
            'anak' =>'required'
        ]);

        $date = $request->input('tanggal');
        $tanggal = date('Y-m-d', strtotime($date));
        $hari = date('l', strtotime($date));

        if($hari == "Saturday" || $hari == "Sunday") {
            $harga_anak = 20000;
            $harga_dewasa = 30000;
        } else {
            $harga_anak = 15000;
            $harga_dewasa = 20000;
        }
        $dewasa = $request->input('dewasa');

        $anak = $request->input('anak');
        
        $total_harga = 
            $request->input('dewasa')*$harga_dewasa + 
            $request->input('anak')*$harga_anak;
       
        
        return view('user.tiket.pesan',[
            'hari' => $hari,
            'tanggal' => $tanggal,
            'dewasa' => $dewasa,
            'anak' => $anak,
            'harga_anak' => $harga_anak,
            'harga_dewasa' => $harga_dewasa,
            'total_harga' => $total_harga,
        ]);  
        // dd($total_harga) ;
    }

    public function konfirmasi(Request $request)
    {
        $id_user = Auth::user()->id;
        $request->validate([
            'tanggal' =>'required',
            'dewasa' =>'required',
            'anak' =>'required',
            'total_harga' =>'required'
        ]);
        $tanggal = $request->input('tanggal');
        $tiket = Tiket::create([
            'id_user' => $id_user,
            'tanggal' => $request->input('tanggal'),
            'dewasa' => $request->input('dewasa'),
            'anak' => $request->input('anak'),  
            'total_harga' => $request->input('total_harga')
        ]);
        return view('user.tiket.konfirmasi')->with('sukses','Data Berhasil ditambahkan');

    
    }
}
