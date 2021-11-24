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

        // 1,5jt harga villa
        $total_harga = $total_hari*1500000; 
        
        $dewasa = $request->input('dewasa');

        $anak = $request->input('anak');

        $id=$request->input('id_villa');
        
        $villa = Penginapan::find($request->input('id_villa'))->nama_villa;

        return view('user.booking.pesan',[
            'id_villa' => $request->input('id_villa'),
            'checkin' => $startDate,
            'checkout' => $endDate,
            'dewasa' => $dewasa,
            'anak' => $anak,
            'total_harga' => $total_harga,
            'total_hari' => $total_hari,
            'villa' => $villa,
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
        $booking = Booking::create([
            'id_user' => $id_user,
            'id_villa' => $request->input('id_villa'),
            'checkin' => $request->input('checkin'),
            'checkout' => $request->input('checkout'),
            'dewasa' => $request->input('dewasa'),
            'anak' => $request->input('anak'),
            'total_harga' => $request->input('total_harga')
        ]);
        return view('user.booking.konfirmasi')->with('sukses','Data Berhasil ditambahkan');

    
    }
}
