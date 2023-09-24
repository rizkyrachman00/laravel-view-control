@extends('layouts.app')

@section('content')
<div class="container-utama">
  <!-- Navigation Bar -->
  <div class="container-navbar">
    <ul class="ul-navbar">
      <li class="li-navbar">
        <a href="#" class="a-navbar">HOME</a>
      </li>
      <li class="li-navbar">
        <a href="{{ route('profile') }}" class="a-navbar">About Me</a>
      </li>
      <li class="li-navbar">
        <a href="{{ route('kampus') }}" class="a-navbar">Informasi Kampus</a>
      </li>
    </ul>
  </div>
  <!-- Navigation Bar End -->

  <!-- Content 1 -->
  <div class="container-content">
    <a href="https://home.amikom.ac.id" class="a-content">
      <!-- Menampilkan gambar -->
      <img src="{{ asset('images/LOGO AMIKOM.png') }}" style="width: 400px;" alt="Deskripsi Gambar">
      <p>Mampir ke sini bang !!</p>
    </a>
  </div>
  <!-- Content 1 End -->

  <!-- Footer -->
  <div class="container-footer">
    <h1 class="h1-footer">Website ini dibuat sepenuh hati 😘</h1>
  </div>
  <!-- Footer End -->
</div>
@endsection