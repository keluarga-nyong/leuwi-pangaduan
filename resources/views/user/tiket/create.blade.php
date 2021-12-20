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
								<br>
								<a href="{{ route('user.tiket.pemesanan') }}">
									<div class="card text-center">
										<br>
										<h4 class=" mt-2">
											Lihat Daftar Pemesanan
										</h4>
										<br>
									</div>
								</a>
							</div>
						</div>
						<form action="{{ route('user.tiket.pesan') }}" method="GET">
						@csrf
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<span class="form-label">Tanggal</span>
										<input class="form-control" type="date" name="tanggal" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Dewasa</span>
										<input class="form-control" value="1" type="number" name="dewasa" min="0" required>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Anak</span>
										<input class="form-control" value="0" type="number" name="anak" min="0" required>
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>
							
							<div class="form-btn ">
								<button class="submit-btn" type="submit">Pesan</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection