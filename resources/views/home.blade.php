@extends('layouts.app')

@section('content')
   <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
            <div class="carousel-background"><img src="{{ asset('img/intro-carousel/1.jpg')}}" alt=""></div>
                <div class="carousel-container">
                    <div class="carousel-content">
                        <h2>Saldo Anda</h2>
                        <h2>Rp 5.000.000</h2>
                        <a class="btn-get-started scrollto" data-toggle="modal" data-target="#myModal">Transaksi Sekarang</a>
                    </div>
                </div>
            </div>
        </div>

      </div>
    </div>
  </section><!-- #intro -->
@endsection
