<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      footer.php
* @Package:   wDesign
* @Action:    Modern Theme v2 for the GetSimple 3.x
*
*****************************************************/
?><footer>
  <div class="container">
    <div class="row footer-widgets">

      <div class="col-md-6">
        <div class="footer-widget">
          <h4>Profile społecznościowe i podstrony<span class="head-line"></span></h4>
			    <ul>
				    <li><a href="https://www.facebook.com/I-LO-Collegium-Gostomianum-108536470838777/">Facebook <img src="<?php get_theme_url(); ?>/icons/facebook.png" width="25" alt="Ikona Facebooka"></a>
                <p>Nie ponosimy odpowiedzialności za treści publikowane na innych profilach, w których pojawia się nazwa naszej szkoły.</p>
            </li>
<?php
$podstrony = array(
  array('http://lo1.sandomierz.pl/biblio', 'Szkolna biblioteka', 'Szkolna biblioteka zaprasza!', 'Kultura'),
  array('http://lo1.sandomierz.pl/wfman', 'WF-Man – aktualności sportowe', 'Sportowe osiągnięcia i aktualności.', 'Sport'),
  array('http://lo1.sandomierz.pl/eko', 'Działalność ekologiczna (archiwum)', 'Działalność ekologiczna.', 'Ekologia'),
  array('http://lo1.sandomierz.pl/informatyka', 'E-kompetencje', 'Co każdy o komputerze powinien wiedzieć.', 'Informatyka'),
  array('http://confraternitas.pl', 'Confraternitas Gostomianum – absolwenci', 'Strona społeczności absolwentów.', 'Szkoła')
);
shuffle($podstrony);
foreach($podstrony as $k => $v) {
  echo '<li><a href="'.$v[0].'">'.$v[1].' »»»</a></li>';
}
?>
			    </ul>
          <h4 class="mt-3">Deklaracja dostępności<span class="head-line"></span></h4>
            <ul class="footer">
              <li><a href="http://lo1.sandomierz.pl/data/uploads/dokumenty/strona_www/deklaracja_dostepnosci_2021.pdf">Deklaracja dostępności szkolnej strony WWW</a></li>
              <li><a href="http://lo1.sandomierz.pl/data/uploads/dokumenty/strona_www/raport_o_stanie_zapewnienia_dostepnosci_2021.pdf">Raport o stanie zapewniania dostępności podmiotu publicznego</a></li>
            </ul>
        </div>
      </div><!--end/col-md-6 -->

        <div class="col-md-6">
        <div class="footer-widget contact-widget">
          <h4>Szkoła z tradycjami<span class="head-line"></span></h4>
          <p>I Liceum Ogólnokształcące Collegium Gostomianum – szkoła średnia w Sandomierzu, jedna z najstarszych i najbardziej prestiżowych w Polsce, funkcjonująca od 1602 roku. Pierwotnie kolegium jezuickie ufundowane przez Hieronima Gostomskiego. Od 1773 szkoła świecka.</p>
          <ul>
            <li><b>Numer telefonu/FAX:</b> (15) 832-52-45</li>
            <li><b>Email:</b> <a href="mailto:&#049;&#108;&#111;&#115;&#097;&#110;&#100;&#064;&#108;&#111;&#049;&#046;&#115;&#097;&#110;&#100;&#111;&#109;&#105;&#101;&#114;&#122;&#046;&#112;&#108;">&#049;&#108;&#111;&#115;&#097;&#110;&#100;&#064;&#108;&#111;&#049;&#046;&#115;&#097;&#110;&#100;&#111;&#109;&#105;&#101;&#114;&#122;&#046;&#112;&#108;</a>
            </li>
            <li><b>Adres:</b> ul. J. Długosza 7, 27-600 Sandomierz</li>
            <li><b>Regon:</b> 292442310</li>
            <li><b>NIP:</b> 8641156970</li>
          </ul>
        </div>
      </div><!--end/col-md-6 -->
    </div><!--end/row -->

    <div class="copyright-section">
      <div class="row">
        <div class="col-md-9">
          <a href="http://ispp.pl">Theme &copy; 2016 by Przemysław Przyłucki</a> &bull;
          <a href="http://ecg.vot.pl">Customized by Robert Bednarz</a> &bull;
          <span class="icons-credits">Icon made by Freepik from www.flaticon.com</span>
        </div>
        <div class="col-md-3">
          <ul class="footer-nav">
            <li>
<?php
  if (str_contains(get_site_url(false), 'cgarch')) {
?>
  <a href="<?php echo(substr(get_site_url(false), 0, -7)); ?>"><i class="fa fa-university"></i> Strona główna</a></li>
<?php
  } else {
?>
  <a href="<?php get_site_url() ?>cgarch"><i class="fa fa-archive"></i> Archiwum</a></li>
<?php
  }
?>
          </ul>
        </div>
      </div>
    </div>

  </div><!-- end/container -->
</footer>

<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
<script type="text/javascript" src="<?php get_theme_url(); ?>/assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="<?php get_theme_url(); ?>/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php get_theme_url(); ?>/js/script.js"></script>