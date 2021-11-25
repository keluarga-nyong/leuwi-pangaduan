@extends('layouts.user.auth')

@section('content')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="{{ route('user.check') }}" method="post" autocomplete="off">
					@if(Session::get('sukses'))
						<div class="alert alert-success">
							{{ Session::get('sukses') }}
						</div>
					@endif
					@if(Session::get('gagal'))
						<div class="alert alert-danger">
							{{ Session::get('gagal') }}
						</div>
					@endif
					@csrf
					<span class="login100-form-title p-b-30">
						<img src="{{asset('user/assets/img/logo/logo.png')}}" style=" height: 100px; width:auto;" alt="Leuwi Pangaduan">
					</span>
					<span class="login100-form-title p-b-26">
						Login
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email" value="{{ old('email') }}">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password" value="{{ old('password') }}">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Login
							</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
@endsection