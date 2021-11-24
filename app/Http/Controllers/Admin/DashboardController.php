<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $dewasa = DB::table('tiket')->sum('dewasa');
        $anak = DB::table('tiket')->sum('anak');
        $totalpengunjung = ($dewasa+$anak);
        //hitung pendapatan villa
        $hsl_villa = DB::table('booking_villa1')->sum('total');
        //hitung pendapatan tiket
        $hsl_tiket = DB::table('tiket')->sum('total_harga');
        return view('admin.welcome',['totalpengunjung'=> $totalpengunjung,'hsl_tiket'=>$hsl_tiket,'hsl_villa'=>$hsl_villa]);
        // dd($hsl_tiket);
    }
}
