<?php 
  $page = 'index';
  $title = 'Knut Karlsen';
  $description = 'Mitt navn er Knut Karlsen. Jeg er 28 år og elsker web, design og kode. Trenger du en nettside er jeg mannen å prate med.';
  include('header.php');
?>

    <div class="portfolio">
      <hr class="borderline" />

      <?php /*
      <article class="mirrored">
        <div class="polaroid">
          <a class="option" href="http://drivdesign.no" target="_blank"><i class="icon-external">Gå til nettside</i></a>
          <figure><img src="images/drivdesign.jpg" alt="" /></figure>
        </div>
        <div class="description">
          <h3><a href="http://www.drivdesign.no" target="_blank">Driv Design</a></h3>
          <p>En enkel frontend-jobb (html, css og js). Det som tidligere var en ren flash-side måtte moderniseres for dagens mobil- og nettbrett-brukere. Inn med HTML, ut med flash. Design av <i>Silje Fet</i>.</p>
        </div>
      </article>

      <hr class="separator mirrored" />

      */ ?>

      <article>
        <div class="polaroid">
          <a class="option" href="/filmbyen/"><i class="icon-article">Les mer</i></a>
          <figure><img src="images/filmbyen.jpg" alt="" /></figure>
        </div>
        <div class="description">
          <h3><a href="/filmbyen/">Filmbyen</a></h3>
          <p>Et 8 år langt hobbyprosjekt. Jeg sto for design, frontend og mye av innholdet forøvrig. I bunnen lå et spesialtilpasset CMS - bygd i tett samarbeid med <i>Joacim Lunde</i>. Sidene ble lukket i slutten av 2012.</p>
        </div>
      </article>

      <hr class="separator" />

      <article class="mirrored">
        <div class="polaroid">
          <a class="option" href="http://www.teamveidekke.no" target="_blank"><i class="icon-external">Gå til nettside</i></a>
          <figure><img src="images/teamveidekke.jpg" alt="" /></figure>
        </div>
        <div class="description">
          <h3><a href="http://www.teamveidekke.no" target="_blank">Team Veidekke</a></h3>
          <p>Team Veidekke ble utviklet under min tid i <i>Klapp Media</i>. Nettsidene har et responsivt design og er implementert i Wordpress. Gjør for tiden mindre oppdrag for skiguttene på freelance-basis.</p>
        </div>
      </article>

      <hr class="separator mirrored" />

      <article>
        <div class="polaroid">
          <a class="option zoom" href="images/scriptshadow-xl.jpg"><i class="icon-zoom">Se større bilde</i></a>
          <figure><img src="images/scriptshadow.jpg" alt="" /></figure>
        </div>
        <div class="description">
          <h3><a href="http://www.scriptshadow.net" target="_blank">Scriptshadow</a></h3>
          <p>Undergrunnsbloggen <i>Scriptshadow</i> planla i 2012 å oppgradere sine nettsider. Jeg bidro med design og et ferdig tilpasset Wordpress-theme. De valgte til slutt å ta det hele i en litt annen retning.</p>
        </div>
      </article>

      <hr class="separator" />

      <article class="mirrored">
        <div class="polaroid">
          <a class="option" href="/tees/"><i class="icon-gallery">Se flere bilder</i></a>
          <figure><img src="images/donniedarko.jpg" alt="" /></figure>
        </div>
        <div class="description">
          <h3><a href="/tees/">Film & t-skjorter</a></h3>
          <p>Et knippe filminspirerte illustrasjoner jeg lagde for trykk på t-skjorter. <i>Taxi Driver</i>, <i>Matrix</i> og <i>Donnie Darko</i> var noen av filmene jeg hentet inspirasjon fra.</p>
        </div>
      </article>

      <hr class="separator mirrored" />

      <article>
        <div class="polaroid">
          <a class="option zoom" href="images/filmpusher-xl.jpg"><i class="icon-zoom">Se større bilde</i></a>
          <figure><img src="images/filmpusher.jpg" alt="" /></figure>
        </div>
        <div class="description">
          <h3><a href="http://www.filmpusher.com" target="_blank">Filmpusher</a></h3>
          <p>Et lite nyhetsaggregator-prosjekt som jeg kodet og designet i løpet av en helg i desember, 2010. Nettsiden ble implementert i <i>Wordpress</i>. Lukket i 2013 av praktiske årsaker.</p>
        </div>
      </article>

      <hr class="separator" />

      <article class="mirrored">
        <div class="polaroid">
          <a class="option zoom" href="images/latinfestivalen-xl.jpg"><i class="icon-zoom">Se større bilde</i></a>
          <figure><img src="images/latinfestivalen.jpg" alt="" /></figure>
        </div>
        <div class="description">
          <h3><a href="http://www.latinfestivalen.no" target="_blank">Latinfestivalen</a></h3>
          <p>Et tidlig designutkast for <i>Latinfestivalen</i> fra 2006. De ønsket seg et nytt og ferskere visuelt uttrykk. Forslaget endte i siste ende opp med å bli forkastet.</p>
        </div>
      </article>

      <hr class="separator mirrored" />

      <article>
        <div class="polaroid">
          <a class="option zoom" href="images/danpeled-xl.jpg"><i class="icon-zoom">Se større bilde</i></a>
          <figure><img src="images/danpeled.jpg" alt="" /></figure>
        </div>
        <div class="description">
          <h3><a href="http://www.danpeled.com" target="_blank">Dan Peled</a></h3>
          <p>I slutten av 2004 lagde jeg en nettside for den israelske fotografen <i>Dan Peled</i>. Sidene ble gitt et simplistisk uttrykk for å fremheve bilder fremfor design. Jeg produserte både kode og design.</p>
        </div>
      </article>

    </div>

<?php include('footer.php'); ?>