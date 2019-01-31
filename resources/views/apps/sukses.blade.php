@extends('apps.auth.layout')

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title" >
                <span class="login100-form-title-1">
                    <img src="{{ asset('img/success.png') }}" width="120" height="120" alt="Success">
                </span>
                <span class="login100-form-title-1">
                    <h4>Pesanan Sedang di Proses</h4>
                </span>
                <span>
                    <p>Mohon Tunggu Beberapa Saat</p>
                </span>
                <div class="login100-form-button">
                    <a class="login100-form-btn"href="{{ route('apps.index') }}">OK</a>
                </div>
            </div>
                
                
        </div>
    </div>
</div>
@endsection