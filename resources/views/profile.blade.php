@extends('layouts.app')

@section('content')
<header class="animate__animated animate__backInDown">
  <div class="logo">
    <img src="{{ asset('images/partner.png') }}" alt="logo" class="logo-img" />
    <h1 class="logo-title">RIZKY X</h1>
  </div>
  <nav>
    <ul>
      <li><a href="#jasa">Jasa</a></li>
      <li><a href="mailto:rachman.ti2012@gmail.com">Kontak</a></li>
    </ul>
  </nav>
  <button class="btn-cta" onclick="redirInstagram()">Follow Me</button>
</header>
<div class="container">
  <div class="intro animate__animated animate__rubberBand">
    <p class="title">Hello, rizkyrachman here</p>
    <p class="description">Tech Expert From Village</p>
    <img src="{{ asset('images/foto 1.jpg') }}" alt="rizky foto 1" class="img-foto" />
  </div>
</div>
<div class="parallax">
  <div class="tentang">
    <p class="title animate__animated animate__swing">
      Saya Adalah Programmer
    </p>
    <p class="description animate__animated animate__rotateInDownLeft animate__delay-1s">
      Halo teman-teman SIB-Gits.Id
    </p>
    <div class="mt-10">
      <button class="btn-cta animate__animated animate__rubberBand animate__delay-1s" onclick="redirWhatsapp()">
        Mari Affiliate
      </button>
    </div>
  </div>
  <div class="container">
    <div class="card animate__animated animate__lightSpeedInLeft" id="jasa">
      <div class="card-item">
        <img src="{{ asset('images/24-hours.png') }}" alt="icon1" class="icon" />
        <p class="card-title">Pelayananan 24/7</p>
        <p class="card-description">Akan saya layani setiap hari</p>
      </div>
      <div class="card-item">
        <img src="{{ asset('images/24-hours.png') }}" alt="icon1" class="icon" />
        <p class="card-title">Saya Programmer Murah</p>
        <p class="card-description">
          Biaya jasa yang saya berikan pasti hot deal
        </p>
      </div>
      <div class="card-item">
        <img src="{{ asset('images/rating.png') }}" alt="icon1" class="icon" />
        <p class="card-title">879 Review</p>
        <p class="card-description">Client saya sangat senang</p>
      </div>
    </div>
  </div>
</div>
<footer>
  <p class="title">&copy; rizkyrachman website 2023</p>
</footer>

<script>
  function redirInstagram() {
    window.location.href = "https://instagram.com/rizkyrachman_";
  }

  function redirWhatsapp() {
    window.location.href = "https://wa.me/+629384948";
  }
</script>
@endsection