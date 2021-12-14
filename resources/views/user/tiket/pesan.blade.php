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
						<form action="{{ route('user.tiket.konfirmasi') }}" method="POST">
						@csrf
							<div class="row">
								<div class="col-md-5">
									<div class="form-group">
										<span class="form-label">Tanggal</span>
									</div>
								</div>
								<div class="col-md-7">
									<div class="form-group right">
										<span class="form-label" style="font-weight:bold;">{{$hari}}, </span>
										<input class="input-pesan-tanggal bold" value="{{$tanggal}}" type="text" name="tanggal" id="tanggal" required readonly>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-5">
									<div class="form-group">
										<span class="form-label">no. Tiket</span>
									</div>
								</div>
								<div class="col-md-7">
									<div class="form-group right">
										<input class="input-pesan-tanggal bold ml-2" value="{{$nomor}}" type="text" name="id_pembayaran" id="id_pembayaran" required readonly>
									</div>
								</div>
							</div>
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