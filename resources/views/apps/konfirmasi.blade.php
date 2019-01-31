@extends('apps.auth.layout')

@section('tittle','Konfirmasi')

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title" >
                <span class="login100-form-title-1">
                    <h1>Konfimasi</h1>
                </span>
            </div>
            <span class="label-input100">
                <h5>Detail Pesanan</h5>
            </span>
            <div class="row">
                <div class="col align-self-center">
                    <span class="label-input100">
                        <h6>Ruang {{ $voucher -> namagroup}}</h6>
                        <h6>Paket {{ $voucher -> namavoucher}}</h6>
                        <h6>Durasi {{ $voucher -> durasi}} Menit</h6>
                        <h6>Harga Rp {{ $voucher -> harga}} ,-</h6>
                    </span>
                </div>
            </div>
            <hr>
            <div class="login100-form-title-1">
                <div class="row">
                    <a href="{{ route('apps.room', $voucher -> cnid) }}" class="login100-form-btn-red">
                        Batal
                    </a>
                    <a href="{{ route('apps.proses',['idtag' => $tag,'kode' =>$voucher -> kode, 'user'=>Auth::user()->username ]) }}" class="login100-form-btn">
                        Submit
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection