@extends('apps.layout')

@section('tittle', $tag -> tagname)

@section('assets')
    <style>
        #portfolio .portfolio-item{
            height: auto;
            margin-top: 10px;
        }
    </style>
@endsection

@section('content')
<section id="call-to-action">
        <div class="container text-center">
            <h3 class="section-title">Instacard</h3>
            <p>Dekat, Cepat, Mantap</p>
        </div>
    </section>     
<section id="portfolio"  class="section-bg" >
<div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
                @foreach($room as $data)
                    <li data-filter=".filter-{{ $data -> idroom }}">{{ $data -> namagroup }}</li>
                @endforeach
            </ul>
          </div>
        </div>
      <div class="container">
        

        <div class="row portfolio-container">
        @foreach($voucher as $data)
          <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $data -> roomid}}">
            <div class="portfolio-wrap">
                <div class="portfolio-info">
                    <h4 class="title">{{ $data -> namavoucher}} ({{ $data -> durasi}} Menit)</h4>
                    <a class="cta-btn" href="">Rp {{ $data -> harga}},-</a>
                    <p class="description">Ruang: {{ $data -> namagroup}}</p>
                    <a href="{{ route('apps.konfirmasi',['idtag'=>$tag -> tagid, 'kode' => $data -> kode]) }}" class="btn btn-outline-success">Beli</a>
                </div>
            </div>
          </div>
        @endforeach
        </div>

      </div>
</section>
@endsection