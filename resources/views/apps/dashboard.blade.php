@extends('apps.auth.layout')

@section('assets')
<style>
span{
  z-index: 1;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
  align-items: center;
  font-size: 10px;
  color: #fff;
}
h6{
    margin: 10px 0 0 0;
    z-index: 1;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    align-items: center;
    color: #fff;
}
.login100-form-title-1{
    margin: 0;
}
.card-body{
    padding: 8px;
}
.login100-form-title {
  width: 100%;
  position: relative;
  z-index: 1;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
  align-items: center;

  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;

  padding: 25px 15px 10px 15px;
}
</style>
@endsection

@section('tittle','Dashboard')

@section('content')
<div class="limiter">
		<!-- <div class="container-login100"> -->
			<!-- <div class="wrap-login100"> -->
				<div class="login100-form-title" >
					<span class="login100-form-title-1">
						<img src="{{ asset('img/user.png') }}" width="125" height="125" alt="Profile">
					</span>
					<ul>
						<li><h6>{{ Auth::user()->username }}</h6></li>
						<li><span>{{ Auth::user()->email }}</span></li>
					</ul>
                </div>
                <div class="card-body">
					<div class="flex-box text-center">
						<div class="flex-stretch" style="padding-right:5px">
						<a href="/apps/credits" style="color:black">
						<ul style="list-style-type: none;margin: 0;padding: 10px;border: 2px solid #ccc;border-radius: 5px;">
							<li><b>Saldo</b></li>
                            <li id="balance"></li>
						</ul>
						</a>
						</div>
					</div>
				</div>
                <div class="login100-form-menu">
                <a class="list-group-item" href="{{ route('apps.user.profile') }}">
                    <div class="flex-box">
                        <div class="flex-stretch menu-title">Profil</div>
                    </div>
                </a>
                <a class="list-group-item" href="{{ route('apps.logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <div class="flex-box">
                        <div class="flex-stretch menu-title">Keluar</div>
                    </div>
                </a>
                <form id="logout-form" action="{{ route('apps.logout')}}" method="POST" style="display: none;">
                @csrf
                </form>
            </div>
			</div>
		</div>
	</div>

@endsection
@section('js')
    <script src="{{ asset('js/currency.min.js') }}"></script>
    <script>
        $(function() {
            const IDR = value => currency(value, { symbol: 'Rp ', decimal: '.', separator: ',' });
            $('#balance').html(IDR({{ $tag->balance }}).format(true));
        });
    </script>
@endsection