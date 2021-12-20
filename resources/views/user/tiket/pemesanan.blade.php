@extends('layouts.user.new-app')

@section('content')
    <div class="main my-2">
        <div class="main-content">
            <div class="container-fluid">
                <div class="col-md-12">
                    <!-- TABLE HOVER -->
                    <div class="panel my-2">
                        <div class="panel-heading">
                            <h2 class="panel-title text-center mb-1">Pemesanan Tiket</h2>
                        </div>
                        <div class="panel-body">
                            <div class="col-6">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <td>Kode Booking</td>
                                            <td>Tanggal</td>
                                            <td>Dewasa</td>
                                            <td>Anak</td>
                                            <td>Total Harga</td>
                                            <td>Status</td>
                                            <td>Print Bukti</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @if($booking->first() != null)
                                        @foreach($booking as $booking )
                                        <tr>
                                            <td>{{$booking->id_pembayaran}}</td>
                                            <td>{{$booking->tanggal}}</td>
                                            <td>{{$booking->dewasa}}</td>
                                            <td>{{$booking->anak}}</td>
                                            <td>Rp. {{number_format($booking->total_harga,0,',','.')}}</td>
                                            <td>
                                                @if($booking->status == 0)
                                                <span class="status-no">Belum Bayar</span> 
                                                @else
                                                <span class="status-ok">Sudah Bayar</span> 
                                                @endif
                                            </td>
                                            <td>
                                                @if($booking->status == 1)
                                                <a href="{{$booking->id}}/print" class="btn btn_warning btn-sm" style="padding:0;"> <i class="fa fa-print" style="color: green;"></i> </a>
                                                @else
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="10" class="text-center">Tidak ada pemesanan</td> 
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <!-- END TABLE HOVER -->
					</div>
                </div>
            </div>
        </div>
    </div>
 @endsection


