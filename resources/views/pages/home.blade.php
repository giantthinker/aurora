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
                  <div class="description">Discutez directement avec nous via le widget de chat.</div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="help-container">
              <a href="#" class="help-item">
                <div class="img">
                  <img class="svg ico" src="fonts/svg/emailopen.svg" height="65" alt="">
                </div>
                <div class="inform">
                  <div class="title">Envoyer un ticket </div>
                  <div class="description">Besoin d'aide? Ouvrez un ticket d'assistance</div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="help-container">
              <a href="#" class="help-item">
                <div class="img">
                  <img class="svg ico" src="fonts/svg/book.svg" height="65" alt="">
                </div>
                <div class="inform">
                  <div class="title">Guide</div>
                  <div class="description">Suivez notre base de connaissances pour en savoir plus.</div>
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