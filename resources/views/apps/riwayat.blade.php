@extends('apps.auth.layout')

@section('assets')
<style>
p{
    font-size: 8px;
    color: #000;
    margin-bottom: 0;
}
h5{
    margin: 0;
}
</style>
@endsection

@section('tittle','Dashboard')

@section('content')
<div class="limiter">
    <div class="login100-form-menu">
        @foreach($transaksi as $data)
        <a class="list-group-item">
            <div class="flex-box">
                <div class="flex-stretch menu-title">
                    <h5>{{ $data -> tagname}}</h5>
                    <span>Status : 
                    @if ($data -> status == 0)
                        Proses
                    @else ($data -> status == 1)
                        Sukses
                    @endif
                    </span>
                </div>
                
                <div class="flex-stretch menu-title">
                @if ($data -> transtype == 0)
                    Top-Up
                @elseif ($data -> transtype === 1)
                    Voucher
                @else
                    Mutasi
                @endif | Rp {{ $data -> nominal}},-</div>
                <p>{{ $data -> waktu}}</p>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection