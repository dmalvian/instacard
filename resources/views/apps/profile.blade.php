@extends('apps.auth.layout')

@section('assets')
<link rel="stylesheet" type="text/css" href="{{ asset('css/materialize.min.css') }}">
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
.top {
    margin-top : 25px;
}
.center {
    margin : auto;
}
label {
    font-weight: bold;
}
</style>
<script type="text/javascript">
  var msg = '{{Session::get('profile')}}';
  var exist = '{{Session::has('profile')}}';
  if(exist){
    alert(msg);
  }
  </script>
@endsection

@section('tittle','Dashboard')

@section('content')
<div class="limiter">
    <div class="login100-form-title" >
        <span class="login100-form-title-1">
            <img src="{{ asset('img/user.png') }}" width="125" height="125" alt="Profile">
        </span>
        <ul>
            <li><h6>{{ Auth::user()->username }}</h6></li>
            <li><span>{{ Auth::user()->email }}</span></li>
        </ul>
    </div>
    <div class="login100-form-menu top">
        <form action="{{ route('apps.user.profile') }}" method="POST" class="animated-label-form ajax-form">
            @method('put')
            @csrf
            <div class="input-field">
            <input id="namalengkap" type="text" class="validate" name="tagname" autocomplete="off" value="{{ $tag->tagname }}" required>
                <label for="namalengkap">Nama Lengkap</label>
            </div>
            <div class="input-field">
                <input id="notelp" type="text" class="validate" name="phone" autocomplete="off"  value="{{ $tag->phone }}" required>
                <label for="notelp">No Telpon</label>
            </div>
            <div class="input-field">
                <input id="male" type="radio" class="validate" name="gender" value="0" checked>
                <label for="male">Male</label>
                <input id="female" type="radio" class="validate" name="gender" value="1" {{ $tag->gender == 1 ? 'checked' : '' }}>
                <label for="female">Female</label>
            </div>
            <div class="input-field1">
            <button type="submit" class="login100-form-btn center">
                Simpan
            </button>
            </div>

        </form>
    </div>
</div>

@endsection

@section('js')
<script src="{{ asset('js/materialize.min.js') }}"></script>    
@endsection