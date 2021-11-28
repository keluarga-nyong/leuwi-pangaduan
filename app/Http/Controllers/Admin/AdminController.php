<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Pegawai;
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
         //Validate Inputs
         $request->validate([
            'nama'=>'required',
            'jenis_kelamin'=>'required',
            'phone'=>'required',
            'alamat'=>'required',
            'jabatan'=>'required',
            'email'=>'required',
            'password'=>'required|min:5|max:30',
        ]);

        $pegawai = new Pegawai();
        $pegawai->nama = $request->nama;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->phone = $request->phone;
        $pegawai->alamat = $request->alamat;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->email = $request->email;
        $pegawai->password = \Hash::make($request->password);
        $save = $pegawai->save();
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
        $request->validate([
            'nama'=>'required',
            'jenis_kelamin'=>'required',
            'phone'=>'required',
            'alamat'=>'required',
            'jabatan'=>'required',
            'email'=>'required',
            'password'=>'required|min:5|max:30',
        ]);

        $pegawai = new Pegawai();
        $pegawai->nama = $request->nama;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->phone = $request->phone;
        $pegawai->alamat = $request->alamat;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->email = $request->email;
        $pegawai->password = \Hash::make($request->password);
        $save = $pegawai->save();
        return redirect ("/admin/pegawai");
    }
    public function delete ($id)
    {
        $pegawai = \App\Models\Pegawai::find($id);
        $pegawai->delete();
        return redirect('/admin/pegawai')->with('sukses','data berhasil dihapus');
    }
}
