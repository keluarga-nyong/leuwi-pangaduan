<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pegawai;
use App\Models\Present;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class PegawaiController extends Controller 
{
    //
    public function index()
    {
        $jam = date('H:i:s');
        $present = Present::whereUserId(auth()->user()->id)->whereTanggal(date('Y-m-d'))->first();
        $url = 'https://kalenderindonesia.com/api/YZ35u6a7sFWN/libur/masehi/'.date('Y/m');
        $kalender = file_get_contents($url);
        $kalender = json_decode($kalender, true);
        $libur = false;
        $holiday = null;
        if ($kalender['data'] != false) {
            if ($kalender['data']['holiday']['data']) {
                foreach ($kalender['data']['holiday']['data'] as $key => $value) {
                    if ($value['date'] == date('Y-m-d')) {
                        $holiday = $value['name'];
                        $libur = true;
                        break;
                    }
                }
            }
        }
        return view('pegawai.home', compact('present','libur','holiday'));
        // dd($jam);

    }



    function check(Request $request){
        //Validate Inputs
        $request->validate([
           'email'=>'required|email|exists:pegawais,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists in pegawais table'
        ]);

        $creds = $request->only('email','password');

        if( Auth::guard('pegawai')->attempt($creds) ){
            return redirect()->route('pegawai.home');
        }else{
            return redirect()->route('pegawai.login')->with('fail','Incorrect Credentials');
        }
    }
   
    function logout(){
        Auth::guard('pegawai')->logout();
        return redirect('/pegawai/login');
    }
}
