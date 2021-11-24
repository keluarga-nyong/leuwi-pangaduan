@extends('layouts.user.auth')

@section('content')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="{{ route('user.create') }}" method="post" autocomplete="off">
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
						Register
					</span>
					<div class="wrap-input100 validate-input" data-validate ="The name field is require">
						<input class="input100" type="text" name="name" value="{{ old('name') }}">
						<span class="focus-input100" data-placeholder="Name"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid phone number is: 0812...">
						<input class="input100" type="number" name="phone" value="{{ old('phone') }}">
						<span class="focus-input100" data-placeholder="Phone Number"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid address is: Jl.Bangau">
						<input class="input100" type="text" name="address" value="{{ old('address') }}">
						<span class="focus-input100" data-placeholder="Address"></span>
					</div>
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
					<div class="wrap-input100 validate-input" data-validate="Enter confirm password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="cpassword" value="{{ old('cpassword') }}">
						<span class="focus-input100" data-placeholder="Confirm Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Register
							</button>
						</div>
					</div>

					<div class="text-center p-t-50">
						<span class="txt1">
							Already have an account?
						</span>

						<a class="txt2" href="{{ route('user.login') }}">
							Sign In
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
@endsection