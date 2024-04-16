<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Carbook - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('/') }}/public/front/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/front/css/animate.css">

    <link rel="stylesheet" href="{{ url('/') }}/public/front/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/front/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/front/css/magnific-popup.css">

    <link rel="stylesheet" href="{{ url('/') }}/public/front/css/aos.css">

    <link rel="stylesheet" href="{{ url('/') }}/public/front/css/ionicons.min.css">

    <link rel="stylesheet" href="{{ url('/') }}/public/front/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/front/css/jquery.timepicker.css">


    <link rel="stylesheet" href="{{ url('/') }}/public/front/css/flaticon.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/front/css/icomoon.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/front/css/style.css">
  </head>
  <body>

    @include('front.layout.header')


        @yield('content')


   @include('front.layout.footer')



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ url('/') }}/public/front/js/jquery.min.js"></script>
  <script src="{{ url('/') }}/public/front/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{ url('/') }}/public/front/js/popper.min.js"></script>
  <script src="{{ url('/') }}/public/front/js/bootstrap.min.js"></script>
  <script src="{{ url('/') }}/public/front/js/jquery.easing.1.3.js"></script>
  <script src="{{ url('/') }}/public/front/js/jquery.waypoints.min.js"></script>
  <script src="{{ url('/') }}/public/front/js/jquery.stellar.min.js"></script>
  <script src="{{ url('/') }}/public/front/js/owl.carousel.min.js"></script>
  <script src="{{ url('/') }}/public/front/js/jquery.magnific-popup.min.js"></script>
  <script src="{{ url('/') }}/public/front/js/aos.js"></script>
  <script src="{{ url('/') }}/public/front/js/jquery.animateNumber.min.js"></script>
  <script src="{{ url('/') }}/public/front/js/bootstrap-datepicker.js"></script>
  <script src="{{ url('/') }}/public/front/js/jquery.timepicker.min.js"></script>
  <script src="{{ url('/') }}/public/front/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ url('/') }}/public/front/js/google-map.js"></script>
  <script src="{{ url('/') }}/public/front/js/main.js"></script>

  </body>
</html>
