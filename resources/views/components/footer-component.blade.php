    <!--
    *******************
    FOOTER
    *******************
    -->
    <link href="css/gdpr-cookie.css" rel="stylesheet">
    <footer class="footer">
        <img class="logo-bg logo-footer" src="img/symbol.svg" alt="logo">
      <div class="container">
        <div class="footer-top">
          <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="heading">Services </div>
              <ul class="footer-menu">
                <li class="menu-item"><a href="#">Hébergement </a></li>
                <li class="menu-item"><a href="#">Cloud Virtuel (VPS)</a></li>
                <li class="menu-item"><a href="#">Nom de Domaine</a></li>
                <li class="menu-item"><a href="#">Développement Web</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="heading">Support</div>
              <ul class="footer-menu">
                <li class="menu-item"><a href="#">Mon Aurora</a></li>
                <li class="menu-item"><a href="#">Guide</a></li>
                <li class="menu-item"><a href="/contact">Contact</a></li>
                <li class="menu-item"><a href="#">FAQ</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="heading">Company</div>
              <ul class="footer-menu">
                <li class="menu-item"><a href="#">Nous</a> </li>
                <li class="menu-item"><a href="#">Features</a></li>
                <li class="menu-item"><a href="#">Blog</a></li>
                <li class="menu-item"><a href="#">Legale</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-3">
              <a><img class="svg logo-footer" src="img/logo.svg" alt="logo"></a>
              <div class="copyrigh">©2020 Aurora - All rights reserved</div>
              <div class="soc-icons">
                <a href="https://www.facebook.com/aurorawebsolutions" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-google-plus-g"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="subcribe news">
        <div class="container">
          <div class="row">
          <!--
            <form action="#" class="w-100">
                @csrf
              <div class="col-md-6 offset-md-3">
                <div class="general-input">
                  <input type="email" name="email" placeholder="Enter your email address" class="fill-input">
                  <input type="submit" value="SUBSCRIBE" class="btn btn-default-yellow-fill">
                </div>
              </div>
              <div class="col-md-6 offset-md-3 text-center pt-4">
                <p>Subscribe to our newsletter to receive news and updates</p>
              </div>
            </form>
            -->
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              
            </div>
            <div class="col-lg-6">
              <ul class="payment-list">
                <li><p>Payments We Accept</p></li>
                <li><i class="fab fa-cc-paypal"></i></li>
                <li><i class="fab fa-cc-visa"></i></li>
                <li><i class="fab fa-cc-mastercard"></i></li>
                <li><i class="fab fa-cc-apple-pay"></i></li>
                <li><i class="fab fa-cc-discover"></i></li>
                <li><i class="fab fa-cc-amazon-pay"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="js/scripts.min.js"></script>
    <script src="js/gdpr-cookie.js"></script>
    <script>
    $.gdprcookie.init({});
    $(document.body)
    .on("gdpr:show", function() {
    console.log("Cookie dialog is shown");
    })
    .on("gdpr:accept", function() {
    var preferences = $.gdprcookie.preference();
    console.log("Preferences saved:", preferences);
    })
    .on("gdpr:advanced", function() {
    console.log("Advanced button was pressed");
    });
    if ($.gdprcookie.preference("marketing") === true) {
    console.log("This should run because marketing is accepted.");
    }
    </script>