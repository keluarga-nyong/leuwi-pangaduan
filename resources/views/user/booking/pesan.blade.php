@extends('layouts.user.new-app')

@section('content')
<div id="booking" class="section">
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
										<span class="form-label">Nama Villa</span>
									</div>
								</div>
								<div class="col-md-7">
									<div class="form-group right">
										<input class="input-pesan-tanggal" value="{{$villa}}" type="text" required readonly>
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
										<input class="input-pesan" value="{{$dewasa}}" type="text" name="dewasa" id="dewasa" required readonly>	
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Anak</span>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<input class="input-pesan" value="{{$anak}}" type="text" name="anak" id="anak" required readonly>	
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
										<input class="input-pesan" value="{{$total_hari}}" type="text" id="tanggal" required readonly> 
										<span class="form-label">Hari</span>
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