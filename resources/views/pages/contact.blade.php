@extends('master')

@section('content')
      <!-- ***** UPLOADED MENU FROM HEADER.HTML ***** -->
  <header id="header"> </header>
  <!-- ***** BANNER ***** -->
  <div class="top-header exapath-w">
    <div class="total-grad-inverse"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">
            <div class="heading">Nous contacter</div>
            <div class="subheding">Salut! Nous avons un support premium 24/7/365. Nous attendons avec impatience votre contact. </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** CONTACT FORM ***** -->
  <section id="ticket" class="exapath pb-80">
    <div class="container">
      <div class="sec-main sec-up mb-0 sec-bg1">
        <div class="randomline">
          <div class="bigline"></div>
          <div class="smallline"></div>
        </div>
        <div class="row">
          <div class="col-md-12 col-lg-12 cd-filter-block mb-0">
            <div class="form-contact cd-filter-content p-0 sec-bx">
              <h2 class="section-heading mb-1">Remplissez le formulaire de contact pour nous contacter</h2>
              <p >Nous vous aiderons de la meilleure façon.</p>
                @if (session('status'))
                    <h3 class="c-pink"> {{ session('status')  }}</h3>
                @endif
              <form action="{{ url('contact-us') }}" method="post">
                @csrf

                <div class="row">
                  <div class="col-md-6">
                    <label><i class="fas fa-user-tie"></i></label>
                    <input id="name" type="text" name="name" placeholder="Nom" required>
                  </div>
                  <div class="col-md-6">
                    <label><i class="fas fa-envelope"></i></label>
                    <input id="email" type="email" name="email" placeholder="Email" required>
                  </div>
                  <div class="col-md-6">
                    <label><i class="fas fa-file-alt"></i></label>
                    <input id="subject" type="text" name="subject" placeholder="Sujet" required>
                  </div>
                  <div class="col-md-6">
                    <div class="cd-select mt-4">
                      <label class="db"></label>
                      <select id="department" name="department" class="select-filter">
                        <option value="">Problème avec</option>
                        <option value="Support/Help Desk">Nom de Domaine</option>
                        <option value="Commercial Department">Hébergement Web</option>
                        <option value="Sales Department">VPS</option>
                        <option value="Schedule Metings">Autres</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group mt-4">
                      <textarea id="message" name="message" class="form-control" rows="5" placeholder="Message..."></textarea>
                    </div>
                  </div>

                <div class="col-md-6 mt-5">
                    <button type="submit" class="btn btn-default-yellow-fill float-left mr-3">Envoyer le ticket</button>
                    <button type="reset" value="reset" class="btn btn-default-fill mt-0 mb-3 mr-3">Réinitialiser</button><br>
                </div>
                <div id="msgSubmit" class="col-md-12 mt-4">
               
                    
                </div>
                </div>
                </div>
              </form>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- ***** HELP ***** -->
  <section class="services help pt-4 pb-80 cpupath">
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
              <a href="#ticket" class="help-item gocheck">
                <div class="img">
                  <img class="svg ico" src="fonts/svg/emailopen.svg" height="65" alt="">
                </div>
                <div class="inform">
                  <div class="title">Envoyer un ticket</div>
                  <div class="description">Ouvrez un ticket et notre assistant vous aidera.</div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="help-container">
              <a href="tel:+237693387688" class="help-item">
                <div class="img">
                  <img class="svg ico" src="fonts/svg/phone.svg" height="65" alt="">
                </div>
                <div class="inform">
                  <div class="title">Téléphonez maintenant</div>
                  <div class="description">Clickez pour lancer l'appel (237)693387688</div>
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
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="help-container">
              <a href="https://my.theauroraweb.com" target="_blank" class="help-item">
                <div class="img">
                  <img class="svg ico" src="fonts/svg/lock.svg" height="65" alt="">
                </div>
                <div class="inform">
                  <div class="title">Espace client</div>
                  <div class="description">Gérez votre hébergement et vos noms de domaine.</div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="help-container">
              <a href="#" class="help-item">
                <div class="img">
                  <img class="svg ico" src="fonts/svg/question.svg" height="65" alt="">
                </div>
                <div class="inform">
                  <div class="title">FAQ</div>
                  <div class="description">Toutes les questions sont répondues ici..</div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection