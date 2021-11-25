<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function check(Request $request){
         //Validate Inputs
         $request->validate([
            'email'=>'required|email|exists:admins,email',
            'password'=>'required|min:5|max:30'
         ],[
             'email.exists'=>'This email is not exists in admins table'
         ]);

         $creds = $request->only('email','password');

         if( Auth::guard('admin')->attempt($creds) ){
             return redirect('/admin/home');
         }else{
             return redirect()->route('admin.login')->with('fail','Incorrect credentials');
         }
    }

    function logout(){
        Auth::guard('admin')->logout();
        return redirect('/');
    }

    public function index()
    {
        $data_pegawai = \App\Models\Pegawai::all();
        return view('admin.pegawai.index',['data_pegawai'=> $data_pegawai]);
    }

    public function create(Request $request)
    {
        \App\Models\Pegawai::create($request->all());
        return redirect ("/admin/pegawai");
    }

    public function dashboard(){
        $dewasa = DB::table('tikets')->sum('dewasa');
        $anak = DB::table('tikets')->sum('anak');
        $totalpengunjung = ($dewasa+$anak);
        //hitung pendapatan villa
        $hsl_villa = DB::table('bookings')->sum('total_harga');
        //hitung pendapatan tiket
        $hsl_tiket = DB::table('tikets')->sum('total_harga');
        return view('admin.welcome',['totalpengunjung'=> $totalpengunjung,'hsl_tiket'=>$hsl_tiket,'hsl_villa'=>$hsl_villa]);
        // dd($hsl_tiket);
    }
    public function edit($id){
       $pegawai=\App\Models\pegawai::find($id);
        return view('admin/pegawai/edit',['pegawai' => $pegawai]);
        //   dd($pegawai);
    }
    public function update (Request $request,$id){
        $pegawai=\App\Models\pegawai::find($id);
        $pegawai->update($request->all());
        return redirect('/admin/pegawai');
    }
}
