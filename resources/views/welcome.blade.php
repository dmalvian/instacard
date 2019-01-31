@extends('layouts.app')

@section('content')
    <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-inner" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro-carousel/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>We are professional</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a class="btn-get-started scrollto" data-toggle="modal" data-target="#myModal">Getting Started</a></div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>At vero eos et accusamus</h2>
                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
                <a class="btn-get-started scrollto" data-toggle="modal" data-target="#myModal">Getting Started</a></div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Temporibus autem quibusdam</h2>
                <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
                <a class="btn-get-started scrollto" data-toggle="modal" data-target="#myModal">Getting Started</a></div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/4.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Nam libero tempore</h2>
                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum.</p>
                <a class="btn-get-started scrollto" data-toggle="modal" data-target="#myModal">Getting Started</a></div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/5.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Magnam aliquam quaerat</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a class="btn-get-started scrollto" data-toggle="modal" data-target="#myModal">Getting Started</a></div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <!-- Modal login -->
  <div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">{{ __('Login') }}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{ route('login') }}" class="login-form form-horizontal">
            @csrf
            <div class="form-group">
              <label for="nama" class="col-sm-2 control-label">Username</label>
              <div class="col-sm-10">
                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" placeholder="Username" required autofocus>
                @if ($errors->has('username'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <label for="nama" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-10">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required >
                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2"></label>
              <div class="col-sm-10">
                <a href="" data-toggle="modal" data-target="#RegModal" data-dismiss="modal">Register <i class="ion-ios-arrow-right"></i></a>
				  <br>
          <a href="" data-toggle="modal" data-target="#EmailModal" data-dismiss="modal">Forgot Password <i class="ion-ios-arrow-right"></i></a>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" name="s"class="btn btn-primary">LOGIN</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->

  <!-- Modal register-->
  <div class="modal fade" id="RegModal" role="dialog" aria-labelledby="RegModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="RegModalLabel">{{ __('Register') }}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{ route('register') }}" aria-label="{{ __('Register') }}" class="login-form form-horizontal">
            @csrf
            <div class="form-group">
            <label for="username" class="col-sm-2 control-label">{{ __('Username') }}</label>
            <div class="col-sm-10">
                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" value="{{ old('username') }}" name="username" placeholder="Username" required autofocus>
                @if ($errors->has('username'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
                @endif
            </div>
            </div>
            <div class="form-group">
            <label for="email" class="col-sm-6 control-label">{{ __('Email Address') }}</label>
            <div class="col-sm-10">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" name="email" placeholder="Email" required>
                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
            </div>
            <div class="form-group">
            <label for="nama" class="col-sm-2 control-label">{{ __('Password') }}</label>
            <div class="col-sm-10">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required >
                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
            </div>
            <div class="form-group">
                <label for="password-confirm" class="col-sm-6 control-label">{{ __('Confirm Password') }}</label>

                <div class="col-md-10">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                </div>
            </div>
            <div class="form-group">
                <label for="role" class="col-sm-2 control-label">{{ __('Role') }}</label>

                <div class="col-md-10">
                    <select name="role" id="role" class="form-control">
                        <option value="4">Member</option>
                        <option value="3">Manager</option>
                        <option value="2">Kantor</option>
                        <option value="1">Superuser</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
            <div class="form-group">
              <label class="col"></label>
              <div class="col">
                  <a href="" data-toggle="modal" data-target="#myModal" data-dismiss="modal"><i class="ion-ios-arrow-left"></i> {{ __('Login') }}</a>
              </div>
            </div>
            <button type="submit" name="s"class="btn btn-primary">{{ __('Register') }}</button>
            </div>
        </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->

  <!-- Modal Email -->
  <div class="modal fade" id="EmailModal" role="dialog" aria-labelledby="EmailModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">{{ __('Reset Password') }}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          @if (session('status'))
              <div class="alert alert-success" role="alert">
                 {{ session('status') }}
              </div>
          @endif
          <form method="post" action="{{ route('password.email') }}" class="login-form form-horizontal">
            @csrf
              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                  <div class="col-md-6">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                      </span>
                    @endif
                  </div>
            </div>

            <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
            {{ __('Send Password Reset Link') }}
            </button>
            
            </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->


  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container">

      </div>
    </section><!-- #featured-services -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Digital Techno Solusindo</h3>
          <p>Digital Techno Solusindo is in consulting, technology, and outsourcing solutions. In today’s world, organizations will have to rapidly reengineer themselves and be more responsive to changing customer needs. DTS is well positioned to be a partner and co-innovator to businesses in their transformation journey by identifying new growth opportunities.</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Mission</a></h2>
              <p align="justify">
                We are dedicated to helping industry leaders and technology challengers convert creative ideas into tangible value by providing unique and reliable software solutions for unparalleled business growth.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Plan</a></h2>
              <p align="justify">
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem  doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Vision</a></h2>
              <p align="justify">
                To be a premier global technology company that ensures industry leadership of our customers by effectively implementing high tech innovation, a solution-driven approach and outstanding professional expertise.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Lokasi PT. Digital Techno Solusindo</h3>
          <p>Anda bisa Mengunjungi Kami Langsung.</p>
        </header>

        <div class="row">

          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15837.158274553747!2d110.41149581977541!3d-7.0923948499999865!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x51473cdfbe03ff48!2sPT.+Digital+Techno+Solusindo!5e0!3m2!1sid!2sid!4v1533274646313" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

        </div>

      </div>
    </section><!-- #services -->


    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Jl. Asoka Garden No.26 Mega Residence Pudak Payung Banyumanik, Pudakpayung, Banyumanik, Semarang, Jawa Tengah 50265</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+62 24 3583732">+62 24 3583732</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">hello@digitaltechno.co.id</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>
@endsection