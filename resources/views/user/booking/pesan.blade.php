@extends('layouts.user.new-app')

@section('content')
<div id="booking" class="section" style="height: 150vh;">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="booking-bg">
							<div class="form-header">
								<h2>Pesan Tiket</h2>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laboriosam numquam at</p>
							</div>
						</div>
						<form action="{{ route('user.booking.konfirmasi') }}" method="POST">
						@csrf
							<div class="row">
								<div class="col-md-5">
									<div class="form-group">
										<span class="form-label">no. Booking</span>
									</div>
								</div>
								<div class="col-md-7">
									<div class="form-group right">
										<input class="input-pesan-tanggal bold ml-2" value="{{$nomor}}" type="text" name="id_pembayaran" id="id_pembayaran" required readonly>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-5">
									<div class="form-group">
										<span class="form-label">Nama Villa</span>
									</div>
								</div>
								<div class="col-md-7">
									<div class="form-group right">
										<input class="input-pesan-tanggal bold ml-2" value="{{$villa}}" type="text" required readonly>
										<input class="input-pesan-tanggal" value="{{$id_villa}}" type="text" name="id_villa" id="id_villa" required hidden>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Check In</span>
										<input class="form-control" type="date" value="{{$checkin}}" name="checkin" readonly required style="background-color: #fff;">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Check Out</span>
										<input class="form-control" type="date" value="{{$checkout}}" name="checkout" readonly required style="background-color: #fff;">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Dewasa</span>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<input class="input-orang bold" value="{{$dewasa}}" type="text" name="dewasa" id="dewasa" required readonly><span>Orang</span>	
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Anak</span>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<input class="input-orang bold" value="{{$anak}}" type="text" name="anak" id="anak" required readonly><span>Orang</span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-7">
									<div class="form-group">
										<span class="form-label">Sewa</span>
									</div>
								</div>
								<div class="col-md-5">
									<div class="form-group right">
										<input class="input-pesan-tanggal bold" value="{{$total_hari}} Hari" type="text" id="tanggal" required readonly> 
										<span class="form-label"></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-7">
									<div class="form-group">
										<span class="form-label">Catatan</span>
									</div>
								</div>
								<div class="col-md-5">
									<div class="form-group right">
										<input class="input-pesan-tanggal bold" value="{{$catatan}}" type="text" name="catatan" id="catatan" required readonly> 
										<span class="form-label"></span>
									</div>
								</div>
							</div>
							@if($include == 'hiking')
								@if($hari == "Saturday" || $hari == "Sunday")
									@php 
									$harga_anak = 15000;
                					$harga_dewasa = 30000;
									@endphp
								@else
									@php
									$harga_anak = 10000;
               						$harga_dewasa = 20000;
									@endphp
								@endif
								@php
								$total_tiket = $dewasa*$harga_dewasa + $anak*$harga_anak;
            					$total_harga = $total_tiket + $total_villa;
								@endphp
							<span class="form-label center">{{$include}}</span>
							<input class="input-pesan" value="{{$include}}" type="text" name="include" id="include" required readonly hidden>	
							<hr style=" margin-top:0;">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<span class="form-label">Dewasa</span>
									</div>
								</div>
								<div class="col-md-5">
									<div class="form-group">
										<span class="form-label">{{$harga_dewasa}} x </span>
										<input class="input-pesan" value="{{$dewasa}}" type="text" name="dewasa" id="dewasa" required readonly>	
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">{{$dewasa*$harga_dewasa}}</span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<span class="form-label">Anak</span>
									</div>
								</div>
								<div class="col-md-5">
									<div class="form-group">
										<span class="form-label">{{$harga_anak}} x </span>
										<input class="input-pesan" value="{{$anak}}" type="text" name="anak" id="anak" required readonly>	
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">{{$anak*$harga_anak}}</span>
									</div>
								</div>
							</div>
							@else
							<input class="input-pesan" value="{{$include}}" type="text" name="include" id="include" required readonly hidden>	
							@endif
							<hr style=" margin-top:0;">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<span class="form-label">Villa</span>
									</div>
								</div>
								<div class="col-md-5">
									<div class="form-group">
										<span class="form-label">{{$harga_villa}} x </span>
										<input class="input-pesan" value="{{$total_hari}}" type="text" name="hari" id="hari" required readonly>	
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">{{$harga_villa*$total_hari}}</span>
									</div>
								</div>
							</div>
							<hr style=" margin-top:0;">
							<div class="row">
								<div class="col-md-7">
									<div class="form-group">
										<span class="form-label">Total Harga</span>
									</div>
								</div>
								<div class="col-md-5">
									<div class="form-group">
										<input class="form-control" value="{{$total_harga}}" type="text" name="total_harga" id="total_harga" required readonly>
									</div>
								</div>
							</div>

							<div class="form-btn">
								<button class="submit-btn" type="submit">Konfirmasi Pesanan</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection