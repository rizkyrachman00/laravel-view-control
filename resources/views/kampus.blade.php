@extends('layouts.app')

@section('content')
<!-- menu 1 -->
<div class="menu-1">
  <div class="judul-cont">
    <div class="title-font">
      <a href="#">Profil Kampus</a>
    </div>
  </div>

  <!-- Section home page -->
  <section class="home" id="home">
    <div class="home-content">
      <h3>Selamat Datang Teman"</h3>
      <h1>Profil Singkat ...</h1>
      <h3>Asal Kampus Saya <span class="multiple-text"></span></h3>
      <p>
        Saya merupakan mahasiswa aktif S1 Informatika Semester 5 dan suka belajar Coding Web. Ini merupakan contoh sederhana dari penggunaan Laravel
      </p>
      <a href="#" class="btn">Hubungi Saya</a>
    </div>

    <div class="home-img">
      <img src="{{ asset('images/LOGO AMIKOM.png') }}" alt="" />
    </div>
  </section>

  <!-- section tentang kami -->
  <section class="about" id="about">
    <div class="about-img">
      <img src="{{ asset('images/LOGO AMIKOM.png') }}" alt="" />
    </div>

    <div class="about-content">
      <h2 class="heading">Tentang <span>Kampusku</span></h2>
      <h3>Universitas Amikom Yogyakarta</h3>
      <p>
        Universitas AMIKOM Yogyakarta adalah perguruan tinggi IT swasta di Yogyakarta, Indonesia. Perguruan tinggi ini didirikan pada 29 Desember 1992, di bawah naungan Yayasan AMIKOM Yogyakarta. Memiliki 2 program diploma, 13 program sarjana, dan 1 program pascasarjana
      </p>

      <a href="#" class="btn">Baca Selengkapnya</a>
    </div>
  </section>
  @endsection