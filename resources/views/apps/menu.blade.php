@extends('apps.layout')

@section('tittle', $id -> tagname)

@section('content')
<section id="about">
      <div class="container">
        <div class="row about-cols">
            <div class="col-md-6">
            <a href="{{ route('apps.nominal', $id -> tagid)}}">
                <div class="about-col">
                    <div class="img">
                        <img src="{{ asset('img/portfolio/app3.jpg') }}" alt="" class="img-fluid">
                        <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                    </div>
                    <h2 class="title">Top Up</h2>
                    <p></p>
                </div>
            </a>
            </div>

            <div class="col-md-6">
            <a href="{{ route('apps.room', $id -> tagid)}}">
                <div class="about-col">
                    <div class="img">
                        <img src="{{ asset('img/portfolio/card1.jpg') }}" alt="" class="img-fluid">
                        <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
                    </div>
                    <h2 class="title">Voucher</h2>
                    <p></p>
                </div>
            </a>
            </div>
        </div>
    </div>
</section>
@endsection