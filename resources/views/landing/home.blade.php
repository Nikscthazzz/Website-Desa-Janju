@extends('layouts.landing-layout')
@section("content")

  <section class="text-center height-100 imagebg" data-overlay="4">
      <div class="background-image-holder">
          <img alt="background" src="{{ asset('assets') }}/img/home_hero.jpg" />
      </div>
      <div class="container pos-vertical-center">
          <div class="row">
              <div class="col-md-12">
                  <div class="typed-headline">
                      <span class="h1 inline-block">I'm Stack &mdash; A killer template for</span>
                      <span class="h1 inline-block typed-text typed-text--cursor color--primary" data-typed-strings="startups,SaaS,marketing sites, portfolios,blogging,rapid development,business,showcasing products"></span>
                  </div>
                  <p class="lead">
                      Build lean, beautiful websites with a clean and contemporary
                      <br class="hidden-xs hidden-sm" /> look to suit a range of purposes.
                  </p>
                  <a class="btn btn--primary type--uppercase" href="{{ asset('template') }}#">
                      <span class="btn__text">
                          Launch The Builder
                      </span>
                  </a>
                  <span class="block type--fine-print">or
                      <a href="{{ asset('template') }}/index.html">view the demos</a>
                  </span>
              </div>
          </div>
          <!--end of row-->
      </div>
      <!--end of container-->
  </section>

  <section class="cta cta-4 space--xxs unpad--bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <hr>
                <span class="label label--inline">Sale</span>
                <span>Recieve lifetime free content and bugfix updates when you
                    <a href="#">purchase Stack</a> today</span>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
  </section>
  <section class="switchable switchable--switch feature-large">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-md-6 col-12">
                <div class="video-cover border--round box-shadow-wide">
                    <div class="background-image-holder">
                        <img src="{{ asset('assets/img/kantor_desa.jpg') }}" alt="">
                    </div>
                    <img src="{{ asset('assets/img/kantor_desa.jpg') }}" alt="">
                </div>
                <!--end video cover-->
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="switchable__text">
                    <h2>Perfect components for modern startups</h2>
                    <p class="lead">
                        Launching an attractive and scalable website quickly and affordably is important for modern startups &mdash; Stack offers massive value without looking 'bargain-bin'.
                    </p>
                </div>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>

@endsection