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
        $data_pemesanan_penginapan = \App\Models\Booking::all();
        return view('admin.psn_penginapan.index',['data_pemesanan_penginapan'=> $data_pemesanan_penginapan]);
    }
}
