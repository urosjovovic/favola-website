<?php

require 'views/partials/head.php';
require 'views/partials/header.php';
?> <div class="delivery-pickup-switcher">
  <div class="delivery-pickup-switcher-delivery">
    <a class="btn <?php if($uri == '/') echo 'active';?>" href="/">
      <i class="fa-solid fa-store fa-l"></i>Šalter </a>
  </div>
  <div class="delivery-pickup-switcher-pickup">
    <a class="btn <?php if($uri == '/dostava') echo 'active';?>" href="/dostava">
      <i class="fa-solid fa-bag-shopping"></i>Dostava </a>
  </div>
</div>
<!-- // Page content start -->
<!-- <div class="container-fluid g-0 hero-image" id="cover">
  <img srcset="images/cover/cover-w600.webp 600w,
images/cover/cover-w700.webp 700w,
images/cover/cover-w800.webp 800w,
images/cover/cover-w900.webp 900w,
images/cover/cover-w1000.webp 1000w,
images/cover/cover-w1100.webp 1100w,
images/cover/cover-w1250.webp 1250w,
images/cover/cover-w1400.webp 1400w,
images/cover/cover-w1600.webp 1600w,
images/cover/cover-w1800.webp 1800w,
images/cover/cover-w2000.webp 2000w,
images/cover/cover-w2400.webp 2400w,
images/cover/cover-w2800.webp 2800w,
images/cover/cover-w3200.webp 3200w" sizes="100vw" alt="Slika">
  <a href="/poruci-online">
    <button class="hero-image-button btn-lg">Poruči onlajn</button>
  </a>
</div> -->
<div class="promo-banners">
  <img src="images/promocije/mala-promocija.png" class="promo-left" alt="Slika">
  <img src="images/promocije/velika-promocija.png" class="promo-right" alt="Slika">
</div>
<div class="container meni">
  <!-- Pice -->
  <div class="row d-flex justify-content-evenly gy-4 mt-3" id="pice">
    <div class="my-3 text-center">
      <h2 class="h1">Pice</h2>
      <p>Naše Favola pice su pravljene od sastojaka visokog kvaliteta, sa puno ljubavi naših veštih pica majstora. Uz našu brzu dostavu imaćete utisak kao da su upravo izašle iz pećnice, hrskave, meke i tako sočne!</p>
    </div> <?php 
    echo productCardPrintCol6ColMd3("pice-margarita", $uri, $image_path_array, "Margherita", "24/32/42cm", "590/910/1210 din.", "440/770/1080 din.", "pelat, kačkavalj, bosiljak, crne masline");
    echo productCardPrintCol6ColMd3("pice-vesuvio", $uri, $image_path_array, "Vesuvio", "24/32/42cm", "610/960/1280 din.", "450/810/1140 din.", "pelat, kačkavalj, šunka, origano, masline");		
    echo productCardPrintCol6ColMd3("pice-fungi", $uri, $image_path_array, "Funghi", "24/32/42cm", "610/960/1280 din.", "450/810/1140 din.", "pelat, kačkavalj, pečurke, origano, masline");		
    echo productCardPrintCol6ColMd3("pice-capricciosa", $uri, $image_path_array, "Capricciosa", "24/32/42cm", "640/1000/1290 din.", "460/850/1150 din.", "pelat, kačkavalj, pečurke, šunka, origano, masline");
    echo productCardPrintCol6ColMd3("pice-vegetarijana", $uri, $image_path_array, "Vegetarijana", "24/32/42cm", "650/1030/1350 din.", "490/900/1210 din.", "pelat, biljni kačkavalj, pečurke, paprika, luk, masline, rukola, bosiljak");
    echo productCardPrintCol6ColMd3("pice-peperoni", $uri, $image_path_array, "Peperoni", "24/32/42cm", "680/1080/1390 din.", "520/930/1240 din.", "pelat, kačkavalj, pečurke, kulen, slanina, origano");
    echo productCardPrintCol6ColMd3("pice-tuna", $uri, $image_path_array, "Tuna", "24/32/42cm", "690/1100/1450 din.", "520/960/1310 din.", "pelat, biljni kačkavalj, tuna, kukuruz šećerac, pečurke, rukola, origano, masline");
    echo productCardPrintCol6ColMd3("pice-favola", $uri, $image_path_array, "Favola Specijal", "24/32/42cm", "810/1360/1850 din.", "590/1130/1590 din.", "pelat, kačkavalj, pečurke, šunka, suvi vrat, kunel, slanina, jaje, masline, origano, pavlaka");																																						echo productCardPrintCol6ColMd3("pice-srbijana", $uri, $image_path_array, "Srbijana", "24/32/42cm", "830/1390/1890 din.", "610/1150/1630 din.", "pelat, kačkavalj, šunka, pršuta, kulen, slanina, jaje, kajmak, origano");
    echo productCardPrintCol6ColMd3("pice-prsuta", $uri, $image_path_array, "Pršuto", "24/32/42cm", "800/1250/1650 din.", "600/1030/1430 din.", "pelat, kačkavalj, pršuta, crne masline, origano, parmezan, rukola");
    echo productCardPrintCol6ColMd3("pice-pikanta", $uri, $image_path_array, "Pikante", "24/32/42cm", "700/1110/1450 din.", "510/920/1270 din.", "pelat, kačkavalj, kulen, feferoni, crne masline, origano");
    echo productCardPrintCol6ColMd3("pice-quattro-formaggi", $uri, $image_path_array, "Quattro Formaggi", "24/32/42cm", "680/1190/1600 din.", "600/980/1380 din.", "pelat, kačkavalj, parmezan, dimljeni kačkavalj, plavi sir, masline, origano");																																						echo productCardPrintCol6ColMd3("pice-bbq-pizza", $uri, $image_path_array, "BBQ", "24/32/42cm", "640/1090/1440 din.", "520/930/1260 din.", "BBQ sos, kačkavalj, dimljena piletina, crveni luk, origano, masline");															
    ?>
  </div>
  <!-- Tortilje -->
  <div class="row d-flex justify-content-evenly gy-4 mt-3" id="tortilje">
    <div class="my-3 text-center">
      <h2 class="h1">Tortilje</h2>
      <p>Naše Favola tortilje predstavljaju zdraviju opciju naše ponude, najkvalitetnije tortilje, sveze povrće i salate, visoko proteinska piletina učiniće da se svakim zalogajem osećate izvanredno. </p>
    </div> <?php
    echo productCardPrintCol6ColMd3("tortilje-tortilja-sunka", $uri, $image_path_array, "Šunka", "350g", "550 din.", "480 din.", "dresing, kačkavalj, šunka, paradajz, zelena salata");
    echo productCardPrintCol6ColMd3("tortilje-tortilja-pecenica", $uri, $image_path_array, "Pečenica", "350g", "570 din.", "480 din.", "dresing, kačkavalj, pečenica, paradajz, zelena salata");
    echo productCardPrintCol6ColMd3("tortilje-tortilja-kulen", $uri, $image_path_array, "Kulen", "350g", "590 din.", "480 din.", "dresing, kačkavalj, kulen, paradajz, zelena salata");
    echo productCardPrintCol6ColMd3("tortilje-tortilja-prsuta", $uri, $image_path_array, "Pršuto", "350g", "650 din.", "540 din.", "dresing, kačkavalj, pršuta, paradajz, zelena salata");
    echo productCardPrintCol6ColMd3("tortilje-dimljena-piletina-tortilja", $uri, $image_path_array, "Dimljena Piletina", "350g", "610 din.", "490 din.", "dresing, kačkavalj, dimljena piletina, paradajz, zelena salata");
    echo productCardPrintCol6ColMd3("tortilje-pileca-tortilja", $uri, $image_path_array, "Hrskava Piletina", "350g", "630 din.", "500 din.", "dresing, kačkavalj, hrskava piletina, paradajz, zelena salata")																	
    ?>
  </div>
  <!-- Obroci i piroske -->
  <div class="row d-flex justify-content-evenly gy-4 mt-3" id="piroske-i-obroci">
    <div class="my-3 text-center">
      <h2 class="h1">Piroške i Obroci</h2>
      <p>Gladni li ste? Želite li Piroške? Imamo ih! Uživajte u omiljenim Favola piroškama, Italijanskim piroškama punim ukusa Italije, ili Zlatiborskim piroškama za pravo gurmansko iskustvo. A za brzi obrok, probajte naše Pohovane štapiće ili Pohovani kačkavalj!</p>
    </div> <?php
    echo productCardPrintCol6ColMd3("piroske-piroska-italijanska", $uri, $image_path_array, "Italijanska", "400g", "710 din.", "540 din.", "pelat, kačkavalj, šunka, pečurke, pavlaka, origano");
    echo productCardPrintCol6ColMd3("piroske-piroska-zlatiborska", $uri, $image_path_array, "Zlatiborska", "500g", "830 din.", "740 din.", "šunka, suvi vrat, slanina, pršuta, kajmak, jaje");									
    echo productCardPrintCol6ColMd3("obroci-pileci-stapici-obrok", $uri, $image_path_array, "Pohovani Štapići", "550g", "810 din.", "740 din.", "250g - pohovani pileći štapići,<br>150g - pomfrit, <br>150g - zelena salata, paradajz, <br>tartar sos");
    echo productCardPrintCol6ColMd3("obroci-pohovani-kackavalj-obrok", $uri, $image_path_array, "Pohovani Kačkavalj", "550g", "720 din.", "660 din.", "250g - pohovanog kačkavalja,<br>150g - pomfrit<br>150g - zelena salata,<br> paradajz,<br> pavlaka");																			
    ?>
  </div>
  <!--Sendvici  -->
  <div class="row d-flex justify-content-evenly gy-4 mt-3" id="sendvici">
    <div class="my-3 text-center">
      <h2 class="h1">Sendviči</h2>
      <p>
        <b>Favola sendviči za svaki ukus i trenutak!</b>
      </p>
      <p>Bez obzira na to što vam se jede, u Favoli ćete pronaći savršeni sendvič za Vas. Svež somun, kvalitetni sastojci i puno ljubavi u svakom zalogaju - to je ono što naše sendviče čine jedinstvenima. Tu je sendvic sunka, kulen, pecenica, tuna i mnogi drugi! </p>
    </div> <?php
    echo productCardPrintCol6ColMd3("sendvici-sendvic-sunka", $uri, $image_path_array, "Šunka", "330g", "410 din.", "370 din.", "somun, šunka, pavlaka, kačkavalj, salata, paradajz");
    echo productCardPrintCol6ColMd3("sendvici-sendvic-svinjski-vrat", $uri, $image_path_array, "Suvi Vrat", "330g", "430 din.", "410 din.", "somun, suvi vrat, pavlaka, kačkavalj, salata, paradajz");
    echo productCardPrintCol6ColMd3("sendvici-sendvic-pecenica", $uri, $image_path_array, "Pečenica", "330g", "430 din.", "410 din.", "somun, pečenica, pavlaka, kačkavalj, salata, paradajz");
    echo productCardPrintCol6ColMd3("sendvici-sendvic-tuna", $uri, $image_path_array, "Tuna", "330g", "480 din.", "430 din.", "somun, kečap, tuna, biljni kačkavalj, kukuruz šećerac, salata");
    echo productCardPrintCol6ColMd3("sendvici-sendvic-kulen", $uri, $image_path_array, "Kulen", "330g", "470 din.", "420 din.", "somun, kulen, pavlaka, kačkavalj, salata, feferone");
    echo productCardPrintCol6ColMd3("sendvici-sendvic-prsuta", $uri, $image_path_array, "Pršuto", "330g", "520 din.", "460 din.", "solun, kajmak, pršuta, kačkavalj, rukola");			
    ?>
  </div>
  <!-- Palacinke slane -->
  <div class="row d-flex justify-content-evenly gy-4 mt-3" id="palacinke-slane">
    <div class="my-3 text-center">
      <h2 class="h1">Palačinke Slane</h2>
      <p>Pogledajte naše neodoljive slane palačinke u Favoli! Savršene za brzi i ukusan obrok. <br> Klasična palacinka od sunke, pikantna palacinka od kulena ili možda sočna palacinka od pečenice? U Favoli imamo slane palačinke za svaki ukus! </p>
    </div> <?php
    echo productCardPrintCol6ColMd3("slane-palacinke-palacinka-sunka", $uri, $image_path_array, "Šunka", "300g", "390 din.", "370 din.", "šunka, pavlaka, kačkavalj");
    echo productCardPrintCol6ColMd3("slane-palacinke-palacinka-kulen", $uri, $image_path_array, "Kulen", "300g", "420 din.", "400 din.", "kulen, pavlaka, kačkavalj");
    echo productCardPrintCol6ColMd3("slane-palacinke-palacinka-pecenica", $uri, $image_path_array, "Pečenica", "300g", "420 din.", "400 din.", "pečenica, pavlaka, kačkavalj");																		
    ?>
  </div>
  <!-- Slatke palacinke -->
  <div class="row d-flex justify-content-evenly gy-4 mt-3" id="palacinke-slatke">
    <div class="my-3 text-center">
      <h2 class="h1">Palačinke Slatke</h2>
      <p>Najlepse slatke palacinke traže Vas u Favoli! Sa čak 11 vrsta slatkih palacinki, Favola je raj za ljubitelje slatkog.Otkrijte savrseni slatki zalogaj sa palačinkom od orea, nutele, kinder, bounty ili mozda mars čokolade i mnoge druge ukuse. Dođite i uverite se sami u kvalitet nasih slatkih palačinki.</p>
    </div> <?php
    echo productCardPrintCol6ColMd3("slatke-palacinke-eurokrem", $uri, $image_path_array, "Eurokrem", "300g", "300 din.", "270 din.", "eurokrem");
    echo productCardPrintCol6ColMd3("slatke-palacinke-nutela", $uri, $image_path_array, "Nutela", "300g", "340 din.", "320 din.", "nutela");
    echo productCardPrintCol6ColMd3("slatke-palacinke-baunti", $uri, $image_path_array, "Bounty", "300g", "400 din.", "370 din.", "nutela, seckani kokos");
    echo productCardPrintCol6ColMd3("slatke-palacinke-mars", $uri, $image_path_array, "Mars", "300g", "400 din.", "370 din.", "nutela, karamela");
    echo productCardPrintCol6ColMd3("slatke-palacinke-milka", $uri, $image_path_array, "Milka", "300g", "420 din.", "390 din.", "milka čokolada");
    echo productCardPrintCol6ColMd3("slatke-palacinke-kinder", $uri, $image_path_array, "Kinder", "300g", "420 din.", "390 din.", "kinder čokoladice");																																					echo productCardPrintCol6ColMd3("slatke-palacinke-snikers", $uri, $image_path_array, "Snikers", "300g", "420 din.", "390 din.", "nutela, karamela, komadići kikirikija");
    echo productCardPrintCol6ColMd3("slatke-palacinke-oreo", $uri, $image_path_array, "Oreo", "300g", "420 din.", "390 din.", "nutela, oreo mrvice");
    echo productCardPrintCol6ColMd3("slatke-palacinke-med", $uri, $image_path_array, "Med", "300g", "300 din.", "270 din.", "livadski med");
    echo productCardPrintCol6ColMd3("slatke-palacinke-dzem", $uri, $image_path_array, "Džem", "300g", "280 din.", "240 din.", "džem od kajsije");
    echo productCardPrintCol6ColMd3("slatke-palacinke-secer", $uri, $image_path_array, "Šećer", "300g", "190 din.", "170 din.", "šećer");		
    ?>
  </div>
  <!-- Dodaci -->
  <div class="dodaci" id="dodaci">
    <div class="row justify-content-center">
      <!-- Dodaci Slani -->
      <div class="slani-dodaci text-center col-12 col-md-6" id="slani-dodaci">
        <div class="my-3 text-center">
          <h2 class="h1">Slani Dodaci</h2>
        </div>
        <div class="my-3 text-center slani-dodaci-gramaza">
          <p>
            <u>50/100g</u>
          </p>
        </div>
        <div class="my-3 text-center slani-dodaci-cena">
          <p>
            <u><?php if($uri == '/'){echo '90/180 din.';}else{echo '120/240 din.';}?></u>
          </p>
        </div>
        <div class="row mb-5 d-flex justify-content-evenly">
          <div class="text-center row d-flex justify-content-evenly" style="max-width: 500px;">
            <div class="col-4 col-md-4">Masline</div>
            <div class="col-4 col-md-4">Pavlaka</div>
            <div class="col-4 col-md-4">Jaje</div>
            <div class="col-4 col-md-4">Pečurke</div>
            <div class="col-4 col-md-4">Kačkavalj</div>
            <div class="col-4 col-md-4">Šunka</div>
            <div class="col-4 col-md-4">Suvi vrat</div>
            <div class="col-4 col-md-4">Pečenica</div>
            <div class="col-4 col-md-4">Kulen</div>
            <div class="col-4 col-md-4">Pršuta</div>
            <div class="col-4 col-md-4">Slanina</div>
            <div class="col-4 col-md-4">Kajmak</div>
            <div class="col-4 col-md-4">Pelat</div>
          </div>
        </div>
      </div>
      <!-- Pomfrit -->
      <div class="col-6 col-md-3" id="prilozi">
        <div class="my-3 text-center">
          <h2 class="h1">Prilozi</h2>
        </div>
        <div class="card">
          <img loading="lazy" <?php
              echo imageSrcSetMenuItem("prilozi-pomfrit", $image_path_array); // replace this with your actual function
                ?> class="card-img-top" alt="Pomfrit">
          <div class="card-body">
            <h3 class="card-title h4">Pomfrit</h3>
            <p class="card-text">250g</p>
            <p class="card-text"><?php if($uri == '/'){echo '250 din.';}else{echo '300 din.';}?></p>
            <div class="accordion border-0">
              <div class="accordion-item border-0">
                <button class="accordion-button collapsed p-0 w-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#pomfrit-sastav">
                  <b>Sastav</b>
                </button>
                <div id="pomfrit-sastav" class="accordion-collapse collapse border-0"> rezani krompir </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- Dodaci Slatki -->
  <div class="slatki-dodaci row justify-content-center" id="slatki-dodaci">
    <div class="my-3 text-center">
      <h2 class="h1">Slatki Dodaci</h2>
    </div>
    <div class="slatki-dodaci-items">
      <table class="table-striped table">
        <tbody>
          <tr>
            <td>Plazma u Mleku</td>
            <td>50g</td>
            <td><?php if($uri == '/'){echo '90 din.';}else{echo '120 din.';}?></td>
          </tr>
          <tr>
            <td>Lešnik</td>
            <td>30g</td>
            <td><?php if($uri == '/'){echo '90 din.';}else{echo '120 din.';}?></td>
          </tr>
          <tr>
            <td>Orah</td>
            <td>30g</td>
            <td><?php if($uri == '/'){echo '90 din.';}else{echo '120 din.';}?></td>
          </tr>
          <tr>
            <td>Malina</td>
            <td>50g</td>
            <td><?php if($uri == '/'){echo '70 din.';}else{echo '90 din.';}?></td>
          </tr>
          <tr>
            <td>Višnja</td>
            <td>50g</td>
            <td><?php if($uri == '/'){echo '70 din.';}else{echo '90 din.';}?></td>
          </tr>
          <tr>
            <td>Banana</td>
            <td>50g</td>
            <td><?php if($uri == '/'){echo '70 din.';}else{echo '90 din.';}?></td>
          </tr>
          <tr>
            <td>Šlag</td>
            <td></td>
            <td><?php if($uri == '/'){echo '70 din.';}else{echo '90 din.';}?></td>
          </tr>
          <tr>
            <td>Plazma</td>
            <td>30g</td>
            <td><?php if($uri == '/'){echo '50 din.';}else{echo '70 din.';}?></td>
          </tr>
          <tr>
            <td>Kokos</td>
            <td>30g</td>
            <td><?php if($uri == '/'){echo '50 din.';}else{echo '70 din.';}?></td>
          </tr>
          <tr>
            <td>Kikiriki</td>
            <td>30g</td>
            <td><?php if($uri == '/'){echo '50 din.';}else{echo '70 din.';}?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Pica -->
<div class="row d-flex justify-content-evenly gy-4 mt-3" id="pica">
  <div class="my-3">
    <h2 class="h1">Pića</h2>
  </div> <?php echo productCardPrintCol6ColMd3("pica-rosa", $uri, $image_path_array, "Rosa", "0.5l", "130 din.", "100 din.", "");
                                  echo productCardPrintCol6ColMd3("pica-coca-cola", $uri, $image_path_array, "Coca-cola", "0.33l", "180 din.", "140 din.", "");
                                  echo productCardPrintCol6ColMd3("pica-cola-zero", $uri, $image_path_array, "Coca-cola Zero", "0.33l", "180 din.", "140 din.", "");
                                  echo productCardPrintCol6ColMd3("pica-fanta", $uri, $image_path_array, "Fanta", "0.33l", "180 din.", "140 din.", "");
                                  echo productCardPrintCol6ColMd3("pica-ultra", $uri, $image_path_array, "Ultra", "0.25l", "200 din.", "150 din.", "");?>
</div>
</div>
<!-- Od kontenjera za sve proizvode -->
<!-- Zone i dostave -->
<div class="zone container-fluid p-0" id="zone">
  <div class="my-3 text-center">
    <h2 class="h1">Zone i Dostave</h2>
  </div>
  <div class="text-center mb-2 address">
    <a href="https://maps.app.goo.gl/X1V4ZRvGGvvAr5oU8" target="_blank">
      <h3>
        <i class="fa-solid fa-location-dot me-3" style="color: #f00;"></i>Adresa: Ljubićka 11, Beograd
      </h3>
    </a>
  </div>
  <div class="w-100 text-center text-muted mb-2 p-2">Plaćanje je moguće isključivo gotovinom</div>
  <!-- My Maps Test -->
  <div id="map-canvas"></div>
  <style>
    html,
    body,
    #map-canvas {
      height: 100%;
      margin: 0px;
      padding: 0px
    }
  </style>
  <!--  -->
  <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDArA1yk8Lc8yca0Vco4xkJ2xY7nELpNZs&loading=async&callback=initMap&region=RS&language=en"></script>
  <script>
    var map;
    var infowindow;
    async function initMap() {
      var mapOptions = {
        gestureHandling: 'cooperative',
        maxZoom: 22,
        streetViewControl: false,
        minZoom: 12,
        restriction: {
          latLngBounds: {
            north: 44.878633,
            south: 44.724634,
            east: 20.569483,
            west: 20.381334,
          },
        },
        styles: [{
          featureType: "poi.business",
          stylers: [{
            visibility: "off"
          }],
        }]
      }
      map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
      var mapLayer = new google.maps.KmlLayer({
        url: "https://www.google.com/maps/d/kml?mid=1zKE0tMK2R_ecfuQzbi-cAVZpeS1d0As"
      });
      mapLayer.setMap(map);
    }
    // google.maps.event.addDomListener(window, 'load', initMap);
  </script>
  <!-- My Maps test -->
  <div class="row m-0 d-flex justify-content-evenly zona">
    <div class="my-3 text-center">Moguće je poručiti i bez ostvarenja minimuma, sa doplatom do minimalnog iznosa za Vašu zonu!</div>
    <div class="col text-center">
      <i class="fa-solid fa-circle fa-xl mb-3" style="color: #0f9d58;"></i>
      <h3>Zona 1</h3>
      <p class="mb-1">Minimum:</p>
      <p>1000 din.</p>
    </div>
    <div class="col text-center">
      <i class="fa-solid fa-circle fa-xl mb-3" style="color: #ffd600;"></i>
      <h3>Zona 2</h3>
      <p class="mb-1">Minimum:</p>
      <p>1200 din.</p>
    </div>
    <div class="col text-center">
      <i class="fa-solid fa-circle fa-xl mb-3" style="color: #e65100;"></i>
      <h3>Zona 3</h3>
      <p class="mb-1">Minimum:</p>
      <p>1400 din.</p>
    </div>
  </div>
</div>
<!-- Page content end --> <?php
require 'views/partials/footer.php';
?>