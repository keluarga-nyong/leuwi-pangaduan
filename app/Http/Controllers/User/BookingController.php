<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;
use App\Models\Penginapan;
use DateTime;
use Auth;

class BookingController extends Controller
{
    //
    public function index()
    {
        $villa = Penginapan::all();
        
        return view('user.booking.create',['villa' => $villa,]);
    }

    public function pesan(Request $request)
    {
        $request->validate([
            'id_villa' =>'required',
            'checkin' =>'required',
            'checkout' =>'required',
            'dewasa' =>'required',
            'anak' =>'required'
        ]);

        $startDate = $request->input('checkin');
        $endDate = $request->input('checkout');

        $awal = DateTime::createFromFormat('Y-m-d',$startDate);
        $akhir = DateTime::createFromFormat('Y-m-d',$endDate);

        $difference = $akhir->diff($awal);
        $total_hari = $difference->format("%a");

        $harga_villa = Penginapan::find($request->input('id_villa'))->harga;
        $total_harga = $total_hari*$harga_villa; 
        
        $dewasa = $request->input('dewasa');
        $anak = $request->input('anak');

        $id=$request->input('id_villa');
        
        $villa = Penginapan::find($request->input('id_villa'))->nama_villa;

        $thn = date('Y') . date('m');
        $cek = Booking::count();

        //Nomor ID Pembayaran Booking
        if($cek == 0) {
            $urut = 100001;
            $nomor = 'BLP' . $thn . $urut;
        } 
        else {
            $ambil = Booking::all()->last();
            $urut = (int)substr($ambil->id_pembayaran, -6) + 1;
            $nomor = 'BLP' . $thn . $urut;
        }

        return view('user.booking.pesan',[
            'id_villa' => $request->input('id_villa'),
            'checkin' => $startDate,
            'checkout' => $endDate,
            'dewasa' => $dewasa,
            'anak' => $anak,
            'total_harga' => $total_harga,
            'total_hari' => $total_hari,
            'villa' => $villa,
            'nomor' => $nomor,
        ]);  
        // dd($villa);
    }

    public function konfirmasi(Request $request)
    {
        $id_user = Auth::user()->id;
        $request->validate([
            'id_villa' =>'required',
            'checkin' =>'required',
            'checkout' =>'required',
            'dewasa' =>'required',
            'anak' =>'required',
            'total_harga' =>'required'
        ]);

        //url chat admin via whatsapp
        $nama = Auth::user()->name;
        $id_pembayaran = $request->input('id_pembayaran');
        $text = '&text=Saya%20';
        $text1 = ' ingin melakukan pembayaran via transfer dengan kode booking%20';
        $nomor_wa = '6285697584867'; 
        $url ='https://api.whatsapp.com/send?phone='.$nomor_wa.$text.$nama.$text1.$id_pembayaran;
        
        $booking = Booking::create([
            'id_user' => $id_user,
            'id_villa' => $request->input('id_villa'),
            'id_pembayaran' => $request->input('id_pembayaran'),
            'checkin' => $request->input('checkin'),
            'checkout' => $request->input('checkout'),
            'dewasa' => $request->input('dewasa'),
            'anak' => $request->input('anak'),
            'total_harga' => $request->input('total_harga')
        ]);

        return view('user.booking.konfirmasi',[
            'url' => $url
        ]);
        // dd($nama);
    }
}
