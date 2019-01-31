@extends('apps.layout')

@section('tittle', 'Nominal')

@section('assets')
    <style>
        #portfolio .portfolio-item .portfolio-info{
            height: 120px;
        }
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
      <div class="container">
        <div class="row portfolio-container">
        @foreach($topup as $data)
          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-info">
                    <a class="cta-btn " id="balance" >{{ $data -> nominal }}</a>
                    <p class="description"></p>
                    <a href="{{ route('apps.topup.konfirmasi', ['idtag' => $id, 'kode' => $data->id]) }}" class="btn btn-outline-success">Beli</a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
</section>
@endsection
@section('js')
    <script src="{{ asset('js/currency.min.js') }}"></script>
    <script>
        $(function() {
            const IDR = value => currency(value, { symbol: 'Rp ', decimal: '.', separator: ',' });
            $('.balance').html(IDR({{ $data -> nominal}}).format(true));
        });
    </script>
@endsection