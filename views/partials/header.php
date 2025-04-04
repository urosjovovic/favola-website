<!-- <nav class="container-fluid navbar navbar-expand-md navbar-light bg-white p-0 invisible navbar-content-pusher">
  <div class="container p-0">
    <a class="navbar-brand p-0 pt-1 ms-3 ms-lg-0" href="/#">
      <img src="images/logo.svg" alt="Picerija Favola Logo" />
    </a>
    <h1 class="d-block d-md-none me-3 mb-0">Pizerija Favola</h1>
    <button class="navbar-toggler me-3 me-lg-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-3 mb-2 mb-lg-0 ms-3">
        <li class="nav-item">
          <a class="nav-link" href="/#pice">Pice</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/#tortilje">Tortilje</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/#piroske-i-obroci">Piroške i obroci</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/#sendvici">Sendvici</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/#palacinke-slane">Palačinke Slane</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/#palacinke-slatke">Palačinke Slatke</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/#paste">Paste</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/#dodaci">Dodaci</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/#pica">Piće</a>
        </li>
        <li class="nav-item free-dostava-item">
          <a class="nav-link free-dostava-btn d-md-block d-none py-1" href="/#zone">DOSTAVA</a>
        </li>
        <div class="d-md-none py-2 border-info border-top">
          <span>Telefon: <a class="ms-auto" href="tel:+381628950833">+38162 895 0833</a>
          </span>
          <p class="radno-vreme mb-0">Radno vreme - Pon-Sub: 09:00-01:00h</p>
          <p class="radno-vreme mb-0">Adresa: Ljubićka 11, Beograd</p>
        </div>
      </ul>
      <div class="call-to-action d-none d-md-block">
        <a class="btn ms-auto" href="tel:+381628950833">+38162 895 0833</a>
        <span class="radno-vreme">Pon-Sub: 09:00-01:00h</span>
      </div>
    </div>
  </div>
</nav> -->
<nav class="container-fluid navbar navbar-expand-md navbar-light bg-white p-0">
  <div class="container p-0">
    <a class="navbar-brand p-0 pt-1 ms-3 ms-lg-0" href="/#">
      <!-- <img loading="lazy" alt="Picerija Favola Logo" src="images/favola-header-logo.png"> -->
      <img src="images/logo.svg" alt="Picerija Favola Logo" />
    </a>
    <h1 class="d-block d-md-none me-3 mb-0">Picerija Favola</h1>
    <button class="navbar-toggler me-3 me-lg-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-3 mb-2 mb-lg-0 ms-3">
        <li class="nav-item">
          <a class="nav-link" href="#pice">Pice</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#tortilje">Tortilje</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#piroske-i-obroci">Piroške i obroci</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#sendvici">Sendvici</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#palacinke-slane">Palačinke Slane</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#palacinke-slatke">Palačinke Slatke</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#paste">Paste</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#dodaci">Dodaci</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#pica">Piće</a>
        </li>
        <li class="nav-item free-dostava-item">
          <a class="nav-link free-dostava-btn d-md-block d-none py-1" href="/dostava#zone">DOSTAVA</a>
        </li>
        <div class="d-md-none py-2 border-info border-top">
          <span>Telefon: <a class="ms-auto" href="tel:+381628950833">+38162 895 0833</a>
          </span>
          <p class="radno-vreme mb-0">Radno vreme - Pon-Sub: 09:00-01:00h</p>
          <p class="radno-vreme mb-0">Adresa: Ljubićka 11, Beograd</p>
        </div>
      </ul>
      <div class="call-to-action d-none d-md-block">
        <a class="btn ms-auto" href="<?php if($uri == '/dostava') { echo '/poruci-online';}else{echo 'tel:+381628950833';}?>">
        <?php if($uri == '/dostava'){ echo 'PORUČI DOSTAVU';}else{ echo '+381 62 895 0833';}?></a>
        <span class="radno-vreme">Pon-Sub: 09:00-01:00h</span>
      </div>
    </div>
  </div>
</nav>
<nav class="mobile-bottom-bar navbar fixed-bottom navbar-light bg-light justify-content-center d-md-none pb-3 pt-0">
  <div class="w-100 text-center border-bottom border-1 text-muted">Plaćanje je moguće isključivo gotovinom <br> Dostava je dostupna samo za online porudžbine</div>
  <div class="quick-info mx-3">
    <p class="besplatna-dostava my-0">
      <b><?php if($uri == '/dostava') {echo 'PORUČITE DOSTAVU';}else{echo 'Ljubićka 11, Beograd';}?></b>
    </p>
    <p class="radno-vreme my-0">Pon-Sub: 09:00-01:00h</p>
  </div>
  <a class="nav-item mx-3" href="/#zone" aria-label="Lokacija">
    <i class="location-icon fa-solid fa-location-dot fa-2xl"></i>
  </a>
  <a class="nav-item mx-3" href="<?php if($uri == '/dostava') {echo '/poruci-online';}else{echo 'tel:+381628950833';}?>" aria-label="Telefon">
  <?php if($uri == '/dostava') {echo '<i class="order-icon fa-solid fa-bag-shopping fa-2xl"></i>';}else{ echo '<i class="order-icon fa-solid fa-phone fa-2xl"></i>';}?>
  </a>
</nav>
<div class="page-main-content">
