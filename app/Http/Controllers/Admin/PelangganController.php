<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PelangganController extends Controller
{
    public function index()
    {
        $data_pelanggan = \App\Models\User::all();
        return view('admin.pelanggan.index',['data_pelanggan'=> $data_pelanggan]);
    }
}
