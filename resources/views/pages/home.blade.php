@extends('master')

@section('content')


    
  <!-- ***** LOADING PAGE ****** -->
  <div id="spinner-area">
    <div class="spinner">
      <div class="double-bounce1"></div>
      <div class="double-bounce2"></div>
      <div class="spinner-txt">Aurora...</div>
    </div>
  </div>
  <!-- ***** UPLOADED MENU FROM HEADER.HTML ***** -->
  <header id="header"> </header>
  <!-- ***** SLIDER ***** -->
  <section id="owl-demo" class="owl-carousel owl-theme owl-loaded owl-drag scrollme">
    <div class="full h-100 sec-bg6">
      <div class="vc-parent">
        <div class="vc-child">
          <div class="top-banner">
            <div class="container animateme" data-when="exit" data-from="0" data-to="0.75" data-opacity="0" data-translatey="-100">
              <img class="svg custom-element-right" src="patterns/rack.svg" alt="Dedicated Server">
              <div class="heading">Un Hébergement <div class="animatype">Avec <span id="typed3"></span></div></div>
              <h3 class="subheading">
                Un hébergement qui vous offre tout ce dont <br> vous avez besoin pour mettre votre site en ligne et <br>satisfaire vos clients avec un petit budget.
                <br>à partir de <b class="c-pink">20,000 FCFA/an</b><br>
              </h3>
              <a href="#" class="btn btn-default-yellow-fill mr-3">Nos Forfaits</a>
              <a href="#" class="btn btn-default-pink-fill">En savoir plus</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="full h-100 sec-bg6">
      <div class="vc-parent">
        <div class="vc-child">
          <div class="top-banner">
            <div class="container animateme" data-when="exit" data-from="0" data-to="0.75" data-opacity="0" data-translatey="-100">
              <img class="svg custom-element-right" src="patterns/cloudvps.svg" alt="Cloud VPS Server">
              <h1 class="heading">Platform <br> de Votre Choix</h1>
              <h3 class="subheading">
                <i class="c-pink feat fas fa-check-circle mr-2"></i>Hébergement Linux<br>
                <i class="c-pink feat fas fa-check-circle mr-2"></i> Hébergement Windows<br>
                <i class="c-pink feat fas fa-check-circle mr-2"></i> Hébergement WordPress
              </h3>
              <a href="#" class="btn btn-default-yellow-fill mr-3">Nos Forfaits</a>
              <a href="#" class="btn btn-default-pink-fill">En savoir plus</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** PRICING TABLES ***** -->
  
  <x-pricing-table/>

  <!-- ***** LOAD BALANCING ***** -->

  <x-load-balancing />

  <!-- ***** FEATURES ***** -->
 
  <x-why-us/>

  <!-- ***** MAP ***** -->
  
  <x-data-centers />

  <!-- ***** CASE STUDY ***** -->
  <section class="casestudy">
    <div class="container">
      <div class="sec-main sec-up bg-pink mb-0">
        <img data-src="img/casestudy.png" class="lazyload" alt="Case Study">
        <div class="plans badge feat bg-purple">case study</div>
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-9">
            <div class="slider-container slider-filter">
              <div class="slider-wrap">
                <div class="swiper-container main-slider" data-autoplay="4000" data-touch="1" data-mouse="0" data-slides-per-view="responsive" data-loop="1" data-speed="1200" data-mode="horizontal" data-xs-slides="1" data-sm-slides="1" data-md-slides="1" data-lg-slides="1">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <h3 class="author">Everth Group</h3>
                      <div class="content-info">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totamer rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
                        <em> Michael Jones - Executive Director</em>
                      </div>
                      <a href="casestudy/casestudy-everthgroup.pdf" class="btn btn-default-yellow-fill mb-2">Case Study Download</a>
                    </div>
                    <div class="swiper-slide">
                      <h3 class="author">Growtop Company</h3>
                      <div class="content-info">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totamer rem aperiam, eaque ipsa quae ab illo inventore.</p>
                        <em> Matt Radford - President &amp; Managing Director</em>
                      </div>
                      <a href="casestudy/casestudy-growtop.pdf" class="btn btn-default-yellow-fill mb-2">Case Study Download</a>
                    </div>
                  </div>
                  <div class="pagination vertical-mode pagination-index"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** HELP ***** -->
  <section class="services help pt-4 pb-80">
    <div class="container">
      <div class="service-wrap">
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="help-container">
              <a href="javascript:void(Tawk_API.toggle())" class="help-item">
                <div class="img">
                  <img class="svg ico" src="fonts/svg/livechat.svg" height="65" alt="">
                </div>
                <div class="inform">
                  <div class="title">Live Chat</div>
                  <div class="description">Lorem Ipsum is simply dummy text printing.</div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="help-container">
              <a href="contact.html" class="help-item">
                <div class="img">
                  <img class="svg ico" src="fonts/svg/emailopen.svg" height="65" alt="">
                </div>
                <div class="inform">
                  <div class="title">Send Ticket</div>
                  <div class="description">Lorem Ipsum is simply dummy text printing.</div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="help-container">
              <a href="knowledgebase.html" class="help-item">
                <div class="img">
                  <img class="svg ico" src="fonts/svg/book.svg" height="65" alt="">
                </div>
                <div class="inform">
                  <div class="title">Knowledge base</div>
                  <div class="description">Lorem Ipsum is simply dummy text printing.</div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- ***** UPLOADED FOOTER FROM FOOTER.HTML ***** -->

@endsection