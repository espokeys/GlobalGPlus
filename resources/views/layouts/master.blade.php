<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software" />
    <meta name="author" content="themefisher.com" />

    <title>Global G+Sarl</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ secure_asset('assets/images/logo.jpg') }}" />

    <!-- Feuilles de style -->
    <link rel="stylesheet" href="{{ secure_asset('assets/ITSolution/css/animate.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/ITSolution/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/ITSolutioncss/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/ITSolutioncss/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/ITSolution/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/ITSolution/css/style.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ secure_asset('assets/plugins/icofont/icofont.min.css') }}" />
    <link rel="stylesheet" href="{{ secure_asset('assets/plugins/slick-carousel/slick/slick.css') }}" />
    <link rel="stylesheet" href="{{ secure_asset('assets/plugins/slick-carousel/slick/slick-theme.css') }}" />
    <link rel="stylesheet" href="{{ secure_asset('assets/css/style.css') }}" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const lightbox = GLightbox({
                selector: '.glightbox'
            });
        });
    </script>


    <!----------------------------------------------------------------------------- -->

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ secure_asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" />
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="{{ secure_asset('assets/plugins/icofont/icofont.min.css') }}" />
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="{{ secure_asset('assets/plugins/slick-carousel/slick/slick.css') }}" />
    <link rel="stylesheet" href="{{ secure_asset('assets/plugins/slick-carousel/slick/slick-theme.css') }}" />

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ secure_asset('assets/css/style.css') }}" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <style>
        .btn-container a {
            background-color: #223a66;
            color: #fff;
            padding: 12px 30px;
            font-weight: 600;
            font-size: 16px;
            border-radius: 50px;
            text-transform: uppercase;
            border: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 4px 8px white;
            text-decoration: none;
        }

        .btn-container a:hover {
            background-color: tomato;
            /* plus foncé */
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .about-content p {
            padding-left: 0 !important;
            margin-left: 0 !important;
            text-indent: 0 !important;
        }

        .services-section {
            padding: 50px 0;
        }

        .heading-section h2 {
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        .heading-section span {
            color: tomato;
        }

        .heading-section img {
            display: block;
            margin: 10px auto 0;
            height: 25px;
        }

        .row.no-gutters {
            margin-left: 0;
            margin-right: 0;
        }

        .services {
            background-color: #d3d3d3;
            /* fond cendre */
            transition: background-color 0.3s ease, color 0.3s ease;
            padding: 30px 20px;
            border-radius: 10px;
            text-align: center;
            width: 100%;
            cursor: pointer;
            box-sizing: border-box;
            margin: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            min-height: 280px;
        }

        .services:hover {
            background-color: tomato;
            color: white;
        }

        .services:hover h3,
        .services:hover p {
            color: white;
        }

        .services .icon {
            font-size: 50px;
            margin-bottom: 20px;
            color: #555;
            transition: color 0.3s ease;
        }

        .services:hover .icon {
            color: white;
        }

        .line {
            width: 50px;
            height: 3px;
            background: tomato;
            margin: 0 auto 20px;
            border-radius: 2px;
        }

        /* Responsive */
        @media (max-width: 767px) {
            .col-md-4 {
                width: 100%;
                margin-bottom: 20px;
            }
        }

        /* Grid system simulation */
        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .col-md-4 {
            flex: 0 0 30%;
            max-width: 30%;
            box-sizing: border-box;
        }

        .team-page {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
        }

        .gallery-item img {
            transition: transform 0.4s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        .gallery-item .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(34, 58, 102, 0.6);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .gallery-item:hover .overlay {
            opacity: 1;
        }

        .gallery-item .overlay i {
            color: #fff;
            font-size: 2rem;
        }

        h4 {
            font-weight: 600;
            color: #223a66;
        }

        p {
            color: #555;
            font-size: 15px;
            max-width: 300px;
            margin: 0 auto;
        }




        .contact-block {
            height: 200px;
            /* Hauteur fixe */
            background-color: #f8f9fa;
            /* Optionnel : couleur de fond douce */
            padding: 20px;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .contact-block i {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .contact-block h5 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 8px;
        }
    </style>

</head>

<body id="top">

    @include('layouts.partials.header')

    @yield('content')

    @include('layouts.partials.footer')


    <!-- Essential Scripts
    =====================================-->

    <!-- Scripts JS locaux -->
    <script src="{{ secure_asset('assets/plugins/jquery/jquery.js') }}"></script>
    <script src="{{ secure_asset('assets/plugins/bootstrap/js/popper.js') }}"></script>
    <script src="{{ secure_asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ secure_asset('assets/plugins/counterup/jquery.easing.js') }}"></script>
    <script src="{{ secure_asset('assets/plugins/slick-carousel/slick/slick.min.js') }}"></script>
    <script src="{{ secure_asset('assets/plugins/counterup/jquery.waypoints.min.js') }}"></script>
    <script src="{{ secure_asset('assets/plugins/shuffle/shuffle.min.js') }}"></script>
    <script src="{{ secure_asset('assets/plugins/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ secure_asset('assets/plugins/google-map/map.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=VOTRE_CLE_API&callback=initMap"></script>

    <script src="{{ secure_asset('assets/js/script.js') }}"></script>
    <script src="{{ secure_asset('assets/js/contact.js') }}"></script>

    <!-- ITSolution JS -->
    <script src="{{ secure_asset('assets/ITSolution/js/jquery.min.js') }}"></script>
    <script src="{{ secure_asset('assets/ITSolution/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ secure_asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ secure_asset('assets/ITSolution/js/bootstrap.min.js') }}"></script>
    <script src="{{ secure_asset('assets/ITSolution/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ secure_asset('assets/ITSolution/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ secure_asset('assets/ITSolution/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ secure_asset('assets/ITSolution/js/owl.carousel.min.js') }}"></script>
    <script src="{{ secure_asset('assets/ITSolution/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ secure_asset('assets/ITSolution/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ secure_asset('assets/ITSolution/js/scrollax.min.js') }}"></script>
    <script src="{{ secure_asset('assets/ITSolution/js/google-map.js') }}"></script>
    <script src="{{ secure_asset('assets/ITSolution/js/main.js') }}"></script>




</body>


</html>
