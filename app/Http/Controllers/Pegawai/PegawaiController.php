<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pegawai;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class PegawaiController extends Controller 
{
    //
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
