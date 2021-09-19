@extends('layout')
@section('title', 'Profil')

@section('sidebar')
@section('active')
<ul>
  <li><a href="http://127.0.0.1:8000/home">Home</a></li>
  <li><a href="#">Today Special</a></li>
  <li><a href="#">Menu</a></li>
  <li><a href="#">Contact</a></li>
  <li><a href="http://127.0.0.1:8000/profil" class="active">Profil</a></li>
</ul>
@endsection
@endsection

@section('header')
@section('nameheader', 'Profil')

@section('content')
<div class="tm-main-section light-gray-bg">
  <div class="container" id="main">
    <section class="tm-section tm-section-margin-bottom-0 row">
      <div class="row">
        <div class="col-lg-12 tm-section-header-container">
          <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="{{ asset('cafe_house/img/logo.png')}}" alt="Logo" class="tm-site-logo"> Profil</h2>
          <div class="tm-hr-container">
            <hr class="tm-hr">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="tm-daily-menu-container margin-top-60">
          <div class="col-lg-4 col-md-4">
            <img src="{{ asset('cafe_house/img/2031710036.jpg')}}" width="240" height="300" alt="Menu board" class="tm-daily-menu-img">
          </div>
          <div class="col-lg-8 col-md-8">
            <p>Nama : Irvi Ariefatul Julia Putri</p>
            <p>TTL : Lamongan, 10 Juli 2002</p>
            <P>Jenis Kelamin : Perempuan</P>
            <p>Golongan Darah : O</p>
            <P>Hobby : Menonton Film</P>
            <p>E-mail : irviariefatul10@gmail.com</p>
            <p>Saya Merupakan Mahasiswa DIII Politeknik Negeri Malang Jurusan Teknologi Informasi dengan Prodi Manajemen Informatika</p>
          </div>
        </div>
      </div>
    </section>
    <br><br>
  </div>
</div>
@endsection
@section('footer')