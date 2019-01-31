
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('img/ins32.png') }}">
    
    <title>Reset Password</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
  </head>

  <body background="{{ asset('img/intro-carousel/11.jpg') }}" style="background-size:cover">
    <section class="login-content">
      <div class="login-box">
        <form class="login-form" method="POST" action="{{ route('password.request') }}" aria-label="{{ __('Reset Password') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

          <h3 class="login-head">Reset Password</h3>
            <div class="form-group">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" placeholder="Enter Email">
              @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>

            <div class="form-group">
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Enter New Password">
              @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            </div>

            <div class="form-group">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Reenter New Password">
            </div>
            <div class="form-group btn-container">
              <button class="btn btn-primary btn-block" type="submit">{{ __('Reset Password') }}</button>
            </div>

        </form>
      </div>
    </section>

<script src="https://ujipemira.ukmpcc.org/js/jquery-3.2.1.min.js"></script>
    <script src="https://ujipemira.ukmpcc.org/js/popper.min.js"></script>
    <script src="https://ujipemira.ukmpcc.org/js/bootstrap.min.js"></script>
    <script src="https://ujipemira.ukmpcc.org/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="https://ujipemira.ukmpcc.org/js/plugins/pace.min.js"></script>

  </body>
</html>
