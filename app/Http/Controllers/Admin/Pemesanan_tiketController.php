<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Pemesanan_tiketController extends Controller
{
    public function index()
    {
        // $psn_pelanggan=::all();
        $psn_tiket = \App\Models\Tiket::all();
        return view('admin.psn_tiket.index',['psn_tiket'=> $psn_tiket]);
    }
}
