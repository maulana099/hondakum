<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">


  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ URL::asset('/assets/img/honda-icon.png')}}" rel="icon">
  <link href="{{ URL::asset('/assets/img/honda-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ URL::asset('/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ URL::asset('/assets/css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::asset('/assets/floating-wpp.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('/assets/floating-wpp-min.css')}}">



  <!-- =======================================================
  * Template Name: Vesperr - v2.0.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>

 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex align-items-center">

    <div class="logo mr-auto">
      <h1 class="text-light"><a href="/">
        <img src="{{ URL::asset('/assets/img/team/honda.png')}}">
      </a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li><a href="/"><i class="icofont-home"></i> Home</a></li>
        <!-- <li><a href="#about">About</a></li> -->
        <li><a href="/honda-kumala/karawang/pricelist"><i class="icofont-price"></i> Pricelist</a></li>
         <li><a href="/honda-kumala/karawang/simulasi-kredit"><i class="icofont-credit-card"></i> Simulasi Kredit</a></li>
        <!-- Button trigger modal -->
      </ul>
    </nav><!-- .nav-menu -->

  </div>
</header><!-- End Header -->

@yield('conten1')

<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-lg-6 text-lg-left text-center">
        <div class="copyright">
          &copy; Copyright 2020<strong> Rian Honda Kumala</strong></div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
            Support by <a href="https://www.instagram.com/struggleteam6/">Struggle Team</a>
          </div>
        </div>
      <!-- <div class="col-lg-6">
        <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
          <a href="#intro" class="scrollto">Home</a>
          <a href="#about" class="scrollto">About</a>
          <a href="#">Privacy Policy</a>
          <a href="#">Terms of Use</a>
        </nav>
      </div> -->
    </div>
  </div>
</footer><!-- End Footer -->

<a href="https://api.whatsapp.com/send?phone=628 2299432130&text=Halo%20Pak%20Rian...%20Saya%20ingin%20bertanya%20seputar%20mobil%20Honda" class="floating-wpp"><i class="icofont-whatsapp"></i></a>

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>



<!-- Vendor JS Files -->
<script src="{{ URL::asset('/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ URL::asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ URL::asset('/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{ URL::asset('/assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{ URL::asset('/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{ URL::asset('/assets/vendor/counterup/counterup.min.js')}}"></script>
<script src="{{ URL::asset('/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{ URL::asset('/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{ URL::asset('/assets/vendor/venobox/venobox.min.js')}}"></script>
<script src="{{ URL::asset('/assets/vendor/aos/aos.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{ URL::asset('/assets/js/main.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('/assets/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('/assets/floating-wpp.js')}}"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@include('sweet::alert')

</body>

</html>