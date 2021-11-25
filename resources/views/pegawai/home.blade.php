@extends('layouts.pegawai.app')
@section('title')
    Home - {{ config('app.name') }}
@endsection
@section('content')
<div class="main-content">
        <!-- Header -->
        <div class="header ">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-6">
                            <h1 class="text-white">Selamat Datang!</h1>
                            <p class="text-lead text-light">Absensi Leuwi Pangaduan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt--8 py-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary shadow border-0">
                        <div class="card-body px-lg-5 py-lg-5">
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if ($libur)
                                <div class="text-center">
                                    <p>Absen Libur (Hari Libur Nasional {{ $holiday }})</p>
                                </div>
                            @else
                                @if (date('l') == "Saturday" || date('l') == "Sunday") 
                                    <div class="text-center">
                                        <p>Absen Libur</p>
                                    </div>
                                @else
                                    @if ($present)
                                        @if ($present->keterangan == 'Alpha')
                                            <div class="text-center">
                                                @if (strtotime(date('H:i:s')) >= strtotime('07:00:00') && strtotime(date('H:i:s')) <= strtotime('17:00:00'))
                                                    <p>Silahkan Check-in</p>
                                                    <form action="{{ route('pegawai.kehadiran.check-in') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                                        <button class="btn btn-primary" type="submit">Check-in</button>
                                                    </form>
                                                @else
                                                    <p>Check-in Belum Tersedia</p>
                                                @endif
                                            </div>
                                        @elseif($present->keterangan == 'Cuti')
                                            <div class="text-center">
                                                <p>Anda Sedang Cuti</p>
                                            </div>
                                        @else
                                            <div class="text-center">
                                                <p>
                                                    Check-in hari ini pukul : ({{ ($present->jam_masuk) }})
                                                </p>
                                                @if ($present->jam_keluar)
                                                    <p>Check-out hari ini pukul : ({{ $present->jam_keluar }})</p>
                                                @else
                                                    @if ((\Carbon\Carbon::parse($present->jam_masuk)->diffInHours(\Carbon\Carbon::parse(date('H:i:s')))) >= 2)
                                                        <p>Jika pekerjaan telah selesai silahkan check-out</p>
                                                        <form action="{{ route('pegawai.kehadiran.check-out', ['kehadiran' => $present]) }}" method="post">
                                                            @csrf @method('patch')
                                                            <button class="btn btn-primary" type="submit">Check-out</button>
                                                        </form>
                                                    @else
                                                        <p>Check-out Belum Tersedia</p>
                                                    @endif
                                                @endif
                                            </div>
                                        @endif
                                    @else
                                        <div class="text-center">
                                            @if (strtotime(date('H:i:s')) >= strtotime('07:00:00') && strtotime(date('H:i:s')) <= strtotime('17:00:00'))
                                                <p>Silahkan Check-in</p>
                                                <form action="{{ route('pegawai.kehadiran.check-in') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="user_id" value="{{ Auth::guard('pegawai')->user()->id }}">
                                                    <button class="btn btn-primary" type="submit">Check-in</button>
                                                </form>
                                            @else
                                                <p>Check-in Belum Tersedia</p>
                                            @endif
                                        </div>
                                    @endif
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="py-5">
            <div class="container">
               
            </div>
        </footer>
    </div>
   
@endsection