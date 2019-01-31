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
            <div class="carousel-background"><img src="{{ asset('img/intro-carousel/3.jpg')}}" alt=""></div>
                <div class="carousel-container">
                    <div class="carousel-content">
                        <div class="container">
                        <h2 class="title">Pilih Cabang</h2>
                            <div class="row">
                            @foreach($cabang as $data)
                                <div class="col-lg-4 wow fadeInUp">
                                    <div class="card bg-transparent">
                                        <a class="btn-lg btn-secondary" href="{{ route('isi_voucher')}}">{{ $data -> tagname}}</a>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      </div>
    </div>
  </section><!-- #intro -->
@endsection
