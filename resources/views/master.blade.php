<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aurora Web Hosting - Votre hébergeur premium au Cameroun et en Afrique.</title>
    <meta name="description" content="">
    <link href="img/favicon.ico" rel="shortcut icon">
    <!-- Fonts -->
    <link href="{{ asset('fonts/cloudicon/cloudicon.css') }}" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
    <link href="{{ asset('fonts/fontawesome/css/all.css') }}" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
    <link href="{{ asset('fonts/opensans/opensans.css') }}" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
    <!-- CSS styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
    <link href="{{ asset('css/swiper.min.css') }}" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
    <link href="{{asset('css/style.min.css') }}" rel="stylesheet">
    <link href="{{asset('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{asset('css/filter.css') }}" rel="stylesheet">
    <link href="{{asset('css/style.min.css') }}" rel="stylesheet">
    <!-- Custom color styles -->
    <link href="{{ asset('css/colors/pink.css') }}" rel="stylesheet" title="pink" media="none" onload="if(media!='all')media='all'"/>
    <link href="{{ asset('css/colors/blue.css') }}" rel="stylesheet" title="blue" media="none" onload="if(media!='all')media='all'"/>
    <link href="{{ asset('css/colors/green.css') }}" rel="stylesheet" title="green" media="none" onload="if(media!='all')media='all'"/>

    <!-- Google site verification -->
    <meta name="google-site-verification" content="t5QjyxBMof1X1ksI7dr4mZCLr8KBVbFF3deddl7n6dE" />

  </head>
  <body>

    <x-top-header />
    @include('partials.menu')

    @yield('content')
    

<footer id="footer"> </footer>
<!-- ***** BUTTON GO TOP ***** -->
<a href="#0" class="cd-top"> <i class="fas fa-angle-up"></i> </a>
<!-- Javascript -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/typed.js') }}"></script>
<script defer src="{{ asset('js/popper.min.js') }}"></script>
<script defer src="{{ asset('js/bootstrap.min.js') }}"></script>
<script defer src="{{ asset('js/jquery.countdown.js') }}"></script>
<script defer src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script defer src="{{ asset('js/slick.min.js') }}"></script>
<script defer src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script defer src="{{ asset('js/isotope.min.js') }}"></script>
<script defer src="{{ asset('js/jquery.scrollme.min.js') }}"></script>
<script defer src="{{ asset('js/swiper.min.js') }}"></script>
<script async src="{{ asset('js/lazysizes.min.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script>new WOW().init();</script>
<script defer src="{{ asset('js/scripts.js') }}"></script>
<script>
var typed3 = new Typed('#typed3', {
strings: ["Disque Dur SSD.", "Nom de domaine gratuit.", "Innovation constante."],
typeSpeed: 50,
backSpeed: 20,
smartBackspace: true,
loop: true
});
</script>

<!-- Tawk --> 

<!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5ebbdace8ee2956d73a0b6c0/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
<!--End of Tawk.to Script-->

<!-- End Tawk -->
</body>
</html>