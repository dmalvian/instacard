@extends('apps.layout')

@section('tittle','Instacard')

@section('assets')
  <script type="text/javascript">
  var msg = '{{Session::get('alert')}}';
  var exist = '{{Session::has('alert')}}';
  if(exist){
    alert(msg);
  }
  </script>
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
        @foreach($cabang as $data)
        <a href="{{ route('apps.menu', $data -> tagid)}}">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('img/portfolio/web.jpg') }}" class="img-fluid" alt="">
              </figure>

              <div class="portfolio-info">
                <h4>{{ $data -> tagname }}</h4>
                <p>Cabang</p>
              </div>
            </div>
          </div>
          </a>  
        @endforeach
        </div>
    </div>
</section><!-- #portfolio -->

@endsection