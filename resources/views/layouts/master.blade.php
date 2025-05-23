<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software" />
    <meta name="author" content="themefisher.com" />

    <title>Novena- Health & Care Medical template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}" />

    <link rel="stylesheet" href="{{ asset('assets/ITSolution/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/ITSolution/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/ITSolutioncss/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/ITSolutioncss/magnific-popup.css') }}">


    <link rel="stylesheet" href="{{ asset('assets/ITSolution/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/ITSolution/css/style.css') }}">

    <!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const lightbox = GLightbox({
      selector: '.glightbox'
    });
  });
</script>


    <!----------------------------------------------------------------------------- -->

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" />
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/icofont/icofont.min.css') }}" />
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/slick-carousel/slick/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/slick-carousel/slick/slick-theme.css') }}" />

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />


</head>

<body id="top">

    @include('layouts.partials.header')

    @yield('content')

    @include('layouts.partials.footer')


    <!-- Essential Scripts
    =====================================-->

    <!-- Main jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.js') }}"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/counterup/jquery.easing.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('assets/plugins/slick-carousel/slick/slick.min.js') }}"></script>
    <!-- Counterup -->
    <script src="{{ asset('assets/plugins/counterup/jquery.waypoints.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/shuffle/shuffle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/counterup/jquery.counterup.min.js') }}"></script>
    <!-- Google Map -->
    <script src="{{ asset('assets/plugins/google-map/map.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap">
    </script>

    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/contact.js') }}"></script>

    <!-- GLightbox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
    <!-- GLightbox JS -->
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

    <!-------------------------------------------------------------------------->

    <script src="{{ asset('assets/ITSolution/js/jquery.min.js') }}"></script>
    <script src="{{ ASSET('assets/ITSolution/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/ITSolution/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/ITSolution/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/ITSolution/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/ITSolution/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('assets/ITSolution/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/ITSolution/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/ITSolution/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('assets/ITSolution/js/scrollax.min.js') }}"></script>
    <script src="{{ asset('assets/ITSolution/js/google-map.js') }}"></script>
    <script src="{{ asset('assets/ITSolution/js/main.js') }}"></script>




</body>


</html>
