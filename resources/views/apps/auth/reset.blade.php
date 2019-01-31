@extends('apps.auth.layout')

@section('tittle','Reset')

@section('content')
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url({{ asset('images/bg-01.jpg') }});">
					<span class="login100-form-title-1">
                    Reset Password
					</span>
				</div>

				<form class="login100-form validate-form" method="POST" action="{{ route('apps.password.email') }}" aria-label="{{ __('Login') }}">
                @csrf
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">{{ __('E-Mail Address') }}</span>
						<input class="input100 {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" type="email" name="email" placeholder="Enter email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="alert-danger" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
					</div>

					<div class="container-login100-form-btn"><center>
						<button class="login100-form-btn">
                        {{ __('Send Password Reset Link') }}
						</button></center>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection