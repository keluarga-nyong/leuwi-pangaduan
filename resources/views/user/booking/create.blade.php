@extends('layouts.user.new-app')

@section('content')
<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="booking-bg">
							<div class="form-header">
								<h2>Make your reservation</h2>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laboriosam numquam at</p>
							</div>
						</div>
						<form action="{{ route('user.booking.pesan') }}" method="GET">
							@csrf
							<div class="form-group">
								<span class="form-label">Villa</span>
								<select class="form-control" name="id_villa" required>
									<option value="" selected hidden>Pilih Villa </option>
									@foreach($villa as $v)
									<option value="{{$v->id}}">{{$v->nama_villa}}</option>
									@endforeach

								</select>
								<span class="select-arrow"></span>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Check In</span>
										<input class="form-control" type="date" name="checkin" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Check Out</span>
										<input class="form-control" type="date" name="checkout" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Dewasa</span>
										<input class="form-control" value="1" type="number" min="0" name="dewasa" required>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Anak</span>
										<input class="form-control" value="0" type="number" min="0" name="anak" required>
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>

							<div class="form-group">
								<span class="form-label">Include</span>
								<select class="form-control" name="include" required>
									<option value="" selected hidden>- Pilih Include - </option>
									<option value="-">-</option>
									<option value="hiking">Hiking</option>
									<option value="lupa">Lupa</option>
								</select>
								<span class="select-arrow"></span>
							</div>

							<div class="form-group">
								<span class="form-label">Catatan Tambahan</span>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Tidak Wajib" name="catatan"></textarea>
							</div>

							<div class="form-btn">
								<button class="submit-btn" type="submit">Pesan</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection