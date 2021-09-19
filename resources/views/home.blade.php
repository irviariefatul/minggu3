@extends('layout')
@section('title', 'Home')


@section('sidebar')
@section('active')<ul>
  <li><a href="http://127.0.0.1:8000/home" class="active">Home</a></li>
  <li><a href="#">Today Special</a></li>
  <li><a href="#">Menu</a></li>
  <li><a href="#">Contact</a></li>
  <li><a href="http://127.0.0.1:8000/profil">Profil</a></li>
</ul>
@endsection
@endsection

@section('header')
@section('nameheader', 'Welcome TO')

@section('content')
<div class="tm-main-section light-gray-bg">
  <div class="container" id="main">
    <section class="tm-section row">
      <div class="col-lg-9 col-md-9 col-sm-8">
        <h2 class="tm-section-header gold-text tm-handwriting-font">The Best Coffee for you</h2>
        <h2>Cafe House</h2>
        <p class="tm-welcome-description"><span class="gold-text">Cafe House</span> telah berdiri sejak 1995 dan telah terjamin kualitasnya. Cafe House merupakan salah satu tempat yang menyediakan berbagai olahan berbahan dasar kopi baik berupa biji utuh maupun yang berupa makanan maupun minuman dan menyediakan segala jenis kopi. Cafe House merupakan tempat yang nyaman dan cocok bagi pecinta kopi untuk dapat menikmati kopi dengan racikan yang dibuat langsung oleh barista profesional. biji kopi diperoleh dari petani di seluruh perkebunan di indonesia yang dirawat dan di jaga kualitasnya. Tidak hanya kopi Cafe House juga menyedikan berbagai makanan dan minuman lainnya.</p>
        <a href="#" class="tm-more-button margin-top-30">Read More</a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-4 tm-welcome-img-container">
        <div class="inline-block shadow-img">
          <img src="{{ asset('cafe_house/img/1.jpg')}}" alt="Image" class="img-circle img-thumbnail">
        </div>
      </div>
    </section>
    <section class="tm-section tm-section-margin-bottom-0 row">
      <div class="col-lg-12 tm-section-header-container">
        <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="{{ asset('cafe_house/img/logo.png')}}" alt="Logo" class="tm-site-logo"> Popular Items</h2>
        <div class="tm-hr-container">
          <hr class="tm-hr">
        </div>
      </div>
      <div class="col-lg-12 tm-popular-items-container">
        <div class="tm-popular-item">
          <img src="{{ asset('cafe_house/img/popular-1.jpg')}}" alt="Popular" class="tm-popular-item-img">
          <div class="tm-popular-item-description">
            <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">a</span>mericano</h3>
            <hr class="tm-popular-item-hr">
            <p>Amerikano terbuat dari kopi yang dibuat dengan mencampurkan satu seloki espresso dengan air panas.</p>
            <br><br>
            <div class="order-now-container">
              <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
            </div>
          </div>
        </div>
        <div class="tm-popular-item">
          <img src="{{ asset('cafe_house/img/popular-2.jpg')}}" alt="Popular" class="tm-popular-item-img">
          <div class="tm-popular-item-description">
            <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">c</span>appuccino</h3>
            <hr class="tm-popular-item-hr">
            <p>Terbuat dari espresso dan tambahan susu cair serta busa di atasnya. Bisa juga mengganti susu dengan bubuk cokelat atau bubuk kayu manis.</p>
            <div class="order-now-container">
              <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
            </div>
          </div>
        </div>
        <div class="tm-popular-item">
          <img src="{{ asset('cafe_house/img/popular-3.jpg')}}" alt="Popular" class="tm-popular-item-img">
          <div class="tm-popular-item-description">
            <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">m</span>ocha</h3>
            <hr class="tm-popular-item-hr">
            <p>Mocha terbuat dari beberapa jenis campuran bahan yaitu kopi , krimer, susu, dan perpaduan dari bubuk cokelat atau pun sirup cokelat</p>
            <div class="order-now-container">
              <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="tm-section row">
      <div class="col-lg-12 tm-section-header-container">
        <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="{{ asset('cafe_house/img/logo.png')}}" alt="Logo" class="tm-site-logo"> Today's Special</h2>
        <div class="tm-hr-container">
          <hr class="tm-hr">
        </div>
      </div>
      <div class="col-lg-12 tm-special-container margin-top-60">
        <div class="tm-special-container-left">
          <!-- left -->
          <div class="tm-special-item">
            <div class="tm-special-img-container">
              <img src="{{ asset('cafe_house/img/special-1.jpg')}}" alt="Special" class="tm-special-img img-responsive">
              <a href="#">
                <div class="tm-special-description">
                  <h3 class="tm-special-title">Latte</h3>
                  <p>Terbuat dari esspreso dan susu </p>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="tm-special-container-right">
          <!-- right -->
          <div>
            <div class="tm-special-item">
              <div class="tm-special-img-container">
                <img src="{{ asset('cafe_house/img/special-2.jpg')}}" alt="Special" class="img-responsive">
                <a href="#">
                  <div class="tm-special-description">
                    <h3 class="tm-special-title">Donat</h3>
                    <p>Tersedia donat dengan berbagai toping</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="tm-special-container-lower">
            <div class="tm-special-item">
              <div class="tm-special-img-container">
                <img src="{{ asset('cafe_house/img/special-3.jpg')}}" alt="Special" class="img-responsive">
                <a href="#">
                  <div class="tm-special-description">
                    <p>Refreshing Drink</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="tm-special-item">
              <div class="tm-special-img-container">
                <img src="{{ asset('cafe_house/img/special-4.jpg')}}" alt="Special" class="img-responsive">
                <a href="#">
                  <div class="tm-special-description">
                    <p>Pasta</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="tm-section">
      <div class="row">
        <div class="col-lg-12 tm-section-header-container">
          <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="{{ asset('cafe_house/img/logo.png')}}" alt="Logo" class="tm-site-logo"> Daily Menu</h2>
          <div class="tm-hr-container">
            <hr class="tm-hr">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="tm-daily-menu-container margin-top-60">
          <div class="col-lg-4 col-md-4">
            <img src="{{ asset('cafe_house/img/menu-board.png')}}" alt="Menu board" class="tm-daily-menu-img">
          </div>
          <div class="col-lg-8 col-md-8">
            <p><span class="gold-text">Cafe House</span> menyediakan berbagai macam minuman Coffee maupun non-coffee, berbagai jenis roti dan pasta</p>
            <ol class="margin-top-30">
              <li>Amerikano</li>
              <li>Cappuccino</li>
              <li>Latte</li>
              <li>Honey Lemon Tea</li>
              <li>Matcha</li>
              <li>Spaghetti</li>
              <li>Donat</li>
            </ol>
            <a href="#" class="tm-more-button margin-top-30">Read More</a>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
@endsection
@section('footer')
