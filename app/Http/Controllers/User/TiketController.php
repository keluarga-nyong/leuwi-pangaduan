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

        $thn = date('Y') . date('m');
        $cek = Tiket::count();

        $dewasa = $request->input('dewasa');
        $anak = $request->input('anak');

        $date = $request->input('tanggal');
        $tanggal = date('Y-m-d', strtotime($date));
        $hari = date('l', strtotime($date));

        // Harga Weekend
        if($hari == "Saturday" || $hari == "Sunday") {
            $harga_anak = 20000;
            $harga_dewasa = 30000;
        } 
        // Harga Weekday
        else {
            $harga_anak = 15000;
            $harga_dewasa = 20000;
        }

        //Nomor ID Pembayaran Tiket
        if($cek == 0) {
            $urut = 100001;
            $nomor = 'TLP' . $thn . $urut;
        } 
        else {
            $ambil = Tiket::all()->last();
            $urut = (int)substr($ambil->id_pembayaran, -6) + 1;
            $nomor = 'TLP' . $thn . $urut;
        }
        
        // Penjumlahan Harga
        $total_harga = $dewasa*$harga_dewasa + $anak*$harga_anak;
       
        
        return view('user.tiket.pesan',[
            'hari' => $hari,
            'tanggal' => $tanggal,
            'dewasa' => $dewasa,
            'anak' => $anak,
            'harga_anak' => $harga_anak,
            'harga_dewasa' => $harga_dewasa,
            'total_harga' => $total_harga,
            'nomor' => $nomor,
        ]);  
        // dd($nomer) ;
    }

    public function konfirmasi(Request $request)
    {
        $id_user = Auth::user()->id;
        $request->validate([
            'id_pembayaran' =>'required',
            'tanggal' =>'required',
            'dewasa' =>'required',
            'anak' =>'required',
            'total_harga' =>'required'
        ]);

        $tanggal = $request->input('tanggal');
        $id_pembayaran = $request->input('id_pembayaran');
        $nama = Auth::user()->name;
        $text = '&text=Saya ';
        $text1 = ' ingin melakukan pembayaran via transfer dengan nomor tiket ';
        $nomor_wa = '6287897813432'; 
        $url ='https://api.whatsapp.com/send?phone='.$nomor_wa.$text.$nama.$text1.$id_pembayaran;

        $tiket = Tiket::create([
            'id_user' => $id_user,
            'id_pembayaran' => $request->input('id_pembayaran'),
            'tanggal' => $request->input('tanggal'),
            'dewasa' => $request->input('dewasa'),
            'anak' => $request->input('anak'),  
            'total_harga' => $request->input('total_harga')
        ]);
        return view('user.tiket.konfirmasi',[
            'tanggal' => $tanggal,
            'id_pembayaran' => $id_pembayaran,
            'url' => $url,
        ]);  
    }
}
