@extends('layouts.user.new-app')

@section('content')

        <!-- MAIN FEATURES -->
        <div class="main-features">
            <div class="container">
                <div class="row">
                    <h1 style="color: #fff;">EVENT</h1>
                </div>
            </div>
        </div> 

        <section>
            <div class="container" style="margin-top: 50px;">
                <div class="row">
                @foreach($konten as $k)
                    <div class="col-md-6">
                        <a href="/user/event/{{$k->id}}/show">
                            <div class="card" style="padding: 15px; margin-top: 20px;">
                                <div class="card-heading">
                                    <img class="mb-2 img-event" src="{{url('/konten/' . $k->gambar)}}" alt="{{$k->gambar}}" onchange="priviewFile(this)">
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">{{$k->judul}}</h3>
                                    <p class="justify">{{Str::limit($k->isi, 300, '  .... ')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                </div>
            </div>
        </section>

@endsection('content')
        