@extends('apps.auth.layout')

@section('tittle','Login')

@section('assets')
	<style>
		.container-login100{
			padding: 0;
		}
		.wrap-login100{
			border-radius: 0;
		}
		body{
			line-height: 6;
		}
	</style>
@endsection

@section('content')
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url({{ asset('images/bg-01.jpg') }});">
					<span class="login100-form-title-1">
                    {{ __('Login') }}
					</span>
				</div>

				<form class="login100-form validate-form" method="POST" action="{{ route('apps.login') }}" aria-label="{{ __('Login') }}">
                @csrf
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">{{ __('Username') }}</span>
						<input class="input100 {{ $errors->has('username') ? ' is-invalid' : '' }}" id="username" type="text" name="username" placeholder="Enter username" value="{{ old('username') }}" required autofocus>
					</div>
					@if ($errors->has('username'))
						<label class="alert-danger" role="alert">
							<strong>{{ $errors->first('username') }}</strong>
						</label>
                    @endif

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input id="password" class="input100 {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required type="password" placeholder="Enter password">
					</div>
					@if ($errors->has('password'))
						<label class="alert-danger" role="alert">
							<strong>{{ $errors->first('password') }}</strong>
						</label>
					@endif

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
							<label class="label-checkbox100" for="remember">
                            {{ __('Remember Me') }}
							</label>
						</div>

						<div>
							<a href="{{ route('apps.password.request') }}" class="txt1">
                            {{ __('Forgot Your Password?') }}
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn"><center>
						<button class="login100-form-btn">
                        {{ __('Login') }}
						</button></center>
					</div>
					<div class="container-login100-form-btn">
                        <center><p><small>Don't Have an Account?</small><br><a href="{{ route('apps.register') }}">Register!</a></p></center>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection