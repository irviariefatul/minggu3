<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman @yield('title')</title>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>
  <link href="{{ asset('cafe_house/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('cafe_house/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ asset('cafe_house/css/templatemo-style.css')}}" rel="stylesheet">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
</head>

<body>
  @section('sidebar')
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <div class="tm-top-header">
    <div class="container">
      <div class="row">
        <div class="tm-top-header-inner">
          <div class="tm-logo-container">
            <img src="{{ asset('cafe_house/img/logo.png')}}" alt="Logo" class="tm-site-logo">
            <h1 class="tm-site-name tm-handwriting-font">Cafe House</h1>
          </div>
          <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
          <nav class="tm-nav">
            @yield('active')
          </nav>
        </div>
      </div>
    </div>
  </div>
  @yield('header')
  <section class="tm-welcome-section">
    <div class="container tm-position-relative">
      <div class="tm-lights-container">
        <img src="{{ asset('cafe_house/img/light.png')}}" alt="Light" class="light light-1">
        <img src="{{ asset('cafe_house/img/light.png')}}" alt="Light" class="light light-2">
        <img src="{{ asset('cafe_house/img/light.png')}}" alt="Light" class="light light-3">
      </div>
      <div class="row tm-welcome-content">
        <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="{{ asset('cafe_house/img/header-line.png')}}" alt="Line" class="tm-header-line">&nbsp;@yield('nameheader')&nbsp;&nbsp;<img src="{{ asset('cafe_house/img/header-line.png')}}" alt="Line" class="tm-header-line"></h2>
        <h2 class="gold-text tm-welcome-header-2">Cafe House</h2>
        <p class="gray-text tm-welcome-description"><span class="gold-text">Cafe House</span> merupakan salah satu tempat yang menyediakan berbagai olahan berbahan dasar kopi baik berupa biji utuh maupun yang berupa makanan maupun minuman dan menyediakan segala jenis kopi. Cafe House merupakan tempat yang nyaman dan cocok bagi pecinta kopi untuk dapat menikmati kopi dengan racikan yang dibuat langsung oleh barista profesional. biji kopi diperoleh dari petani di seluruh perkebunan di indonesia yang dirawat dan di jaga kualitasnya. Tidak hanya kopi Cafe House juga menyedikan berbagai makanan dan minuman lainnya.</p>
        <a href="#main" class="tm-more-button tm-more-button-welcome">Details</a>
      </div>
      <img src="{{ asset('cafe_house/img/table-set.png')}}" alt="Table Set" class="tm-table-set img-responsive">
    </div>
  </section>

  @yield('content')

  @yield('footer')
  <footer>
    <div class="tm-black-bg">
      <div class="container">
        <div class="row margin-bottom-60">
          <nav class="col-lg-3 col-md-3 tm-footer-nav tm-footer-div">
            <h3 class="tm-footer-div-title">Main Menu</h3>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Directory</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Our Services</a></li>
            </ul>
          </nav>
          <div class="col-lg-5 col-md-5 tm-footer-div">
            <h3 class="tm-footer-div-title">About Us</h3>
            <p class="margin-top-15">Cafe House telah berdiri sejak 1995 dan telah terjamin kualitasnya</p>
            <p class="margin-top-15">Menyediakn berbagai olahan makanan maupun minuman dari bahan-bahan dari seluruh indonesia</p>
          </div>
          <div class="col-lg-4 col-md-4 tm-footer-div">
            <h3 class="tm-footer-div-title">Get Social</h3>
            <p>Ikuti kami di berbagai media sosial untuk mendapatkan informasi menarik lainnya</p>
            <div class="tm-social-icons-container">
              <a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
              <a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
              <a href="#" class="tm-social-icon"><i class="fa fa-linkedin"></i></a>
              <a href="#" class="tm-social-icon"><i class="fa fa-youtube"></i></a>
              <a href="#" class="tm-social-icon"><i class="fa fa-behance"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div class="container">
        <div class="row tm-copyright">
          <p class="col-lg-12 small copyright-text text-center">Copyright &copy; 2084 Your Cafe House</p>
        </div>
      </div>
    </div>
  </footer>
</body>
<script type="text/javascript" src="{{ asset('cafe_house/js/jquery-1.11.2.min.js')}}"></script> <!-- jQuery -->
<script type="text/javascript" src="{{ asset('cafe_house/js/templatemo-script.js')}}"></script> <!-- Templatemo Script -->

</html>