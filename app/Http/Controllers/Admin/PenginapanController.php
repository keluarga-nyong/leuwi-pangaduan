<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenginapanController extends Controller
{
    public function index()
    {
        $data_penginapan = \App\Models\Penginapan::all();
        return view('admin.penginapan.index',['data_penginapan'=> $data_penginapan]);
    }
    public function create(Request $request)
    {
        \App\Models\Penginapan::create($request->all());
        return redirect ("/admin/penginapan");
    }
}
