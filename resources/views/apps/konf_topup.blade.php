@extends('apps.auth.layout')

@section('tittle','Konfirmasi')

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title" >
                <span class="login100-form-title-1">
                    <h1>Konfimasi Top-Up</h1>
                </span>
            </div>
            <div class="row">
                <div class="col align-self-center">
                    <span class="label-input100">
                        <h6>Nominal <div class="balance">{{ $topup -> nominal}}</div></h6>
                        <h6>Harga <div class="balance">{{ $topup -> nominal}}</div></h6>
                    </span>
                </div>
            </div>
            <hr>
            <div class="login100-form-title-1">
                <div class="row">
                    <a href="{{ route('apps.nominal', $idtag) }}" class="login100-form-btn-red">
                        Batal
                    </a>
                    <a href="{{ route('apps.top-up.proses',['idtag' => $idtag,'kode' =>$topup -> id, 'user'=>Auth::user()->username ]) }}" class="login100-form-btn">
                        Submit
                    </a>
                </div>
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
            $('.balance').html(IDR({{ $topup -> nominal}}).format(true));
        });
    </script>
@endsection