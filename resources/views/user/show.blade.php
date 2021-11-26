@extends('layouts.user.new-app')

@section('content')

        <div class="main-features ">
            <div class="container">
                <div class="row">
                   <h1 style="color: #fff;">EVENT</h1>
                </div>
            </div>
        </div>
       
        <section>
            <div class="container" style="margin-top: 50px;">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <img src="{{url('/konten/' . $konten->gambar)}}"  alt="Image Intro" class="img-event-show">
                        <h1 >{{$konten->judul}}</h1>
                        <hr style="padding:0;">
                        <p class="justify" style="font-size:15px">{{$konten->isi}}</p>
                    </div>
                </div>
            </div>
        </section>

       
       
@endsection('content')
        