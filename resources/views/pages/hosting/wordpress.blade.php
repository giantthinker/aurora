@extends('master')

@section('content')
      <!-- ***** SLIDER ***** -->
  <div class="top-header item5 overlay">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <div class="wrapper">
            <h1 class="heading">Hébergement WordPress</h1>
            <h3 class="subheading">Hébergement WordPress fiable, puissant et rapide. Outils WordPress inclus.</h3>
            <div id="run-switch" class="run-switch">
              <div class="mo">Prix Mensuel </div>
              <div class="switch"></div>
              <div class="an active">Prix Annuel</div>
            </div>
            <div class="included">
              <h4>Inclus avec</h4>
              <ul><li><i class="fas fa-check-circle"></i> Un CPanel puissant</li></ul>
              <ul><li><i class="fas fa-check-circle"></i> Outils de mise en cache du serveur</li></ul>
              <ul><li><i class="fas fa-check-circle"></i> Certificat SSL Wildcard (gratuit)</li></ul>
              <ul><li><i class="fas fa-check-circle"></i> Outils WordPress</li></ul>
              <ul><li><i class="fas fa-check-circle"></i> Stockage SSD puissant</li></ul>
              <ul><li><i class="fas fa-check-circle"></i> Support 24/7/365</li></ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="gocontent godown gocheck" href="#scroll" >
      <img class="svg" src="fonts/svg/arrowdown.svg" height="80" alt="features">
      <span>Features</span>
    </a>
  </div>
@endsection