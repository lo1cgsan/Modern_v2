<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      footer.php
* @Package:   wDesign
* @Action:    Modern Theme for the GetSimple 3.x
*
*****************************************************/
?><footer>
  <div class="container">
    <div class="row footer-widgets">

      <div class="col-md-6">
        <div class="footer-widget">
          <h4>Profile społecznościowe i podstrony<span class="head-line"></span></h4>
			    <ul>
				    <li><a href="https://www.facebook.com/I-LO-Collegium-Gostomianum-108536470838777/">Facebook <img src="<?php get_theme_url(); ?>/icons/facebook.png" width="28"></a>
                <p>Nie ponosimy odpowiedzialności za treści publikowane na innych profilach, w których pojawia się nazwa naszej szkoły.</p>
            </li>
<?php
$podstrony = array(
  array('http://lo1.sandomierz.pl/biblio', 'Szkolna biblioteka', 'Szkolna biblioteka zaprasza!', 'Kultura'),
  array('http://lo1.sandomierz.pl/wfman', 'WF-Man – aktualności sportowe', 'Sportowe osiągnięcia i aktualności.', 'Sport'),
  array('http://lo1.sandomierz.pl/eko', 'Działalność ekologiczna', 'Działalność ekologiczna.', 'Ekologia'),
  array('http://lo1.sandomierz.pl/informatyka', 'E-kompetencje', 'Co każdy o komputerze powinien wiedzieć.', 'Informatyka'),
  array('http://confraternitas.pl', 'Confraternitas Gostomianum – absolwenci', 'Strona społeczności absolwentów.', 'Szkoła')
);
shuffle($podstrony);
foreach($podstrony as $k => $v) {
  echo '<li><a href="'.$v[0].'">'.$v[1].' »»»</a></li>';
}
?>
			    </ul>
        </div>
      </div><!--end/col-md-6 -->

        <div class="col-md-6">
        <div class="footer-widget contact-widget">
          <h4>Szkoła z tradycjami<span class="head-line"></span></h4>
          <p>I Liceum Ogólnokształcące Collegium Gostomianum – szkoła średnia w Sandomierzu, jedna z najstarszych i najbardziej prestiżowych w Polsce, funkcjonująca od 1602 roku. Pierwotnie kolegium jezuickie ufundowane przez Hieronima Gostomskiego. Od 1773 szkoła świecka.</p>
          <ul>
            <li><b>Numer telefonu/FAX:</b> (15) 832-52-45</li>
            <li><b>Email:</b>&nbsp;
<script type="text/javascript">
//<![CDATA[
<!--
var x="function f(x,y){var i,o=\"\",l=x.length;for(i=0;i<l;i++){if(i<96)y++;" +
"y%=127;o+=String.fromCharCode(x.charCodeAt(i)^(y++));}return o;}f(\"\\007\\" +
"026\\013\\004\\035\\002\\002\\001Q\\025]\\017P\\000\\013ap$o$e1,2>{z%b2rELC" +
"R@\\006@\\023_^\\017APSP[h:j% +>\\r?61\\027,r0qQQMGU^UG\\013\\006\\006\\017" +
"\\003\\002WCy8i,4g6rrratq3x6Z_^BJT\\017A\\024F\\006\\035\\026G\\021\\r\\001" +
"\\tZ\\031\\030\\037LW\\022\\007C\\022^V^2\\0006k-l}::,>>>#n ~\\\"'1'!$\\177" +
"hu57uf#9HCKZUTJ;JU\\\\UALR\\017_3CAD)*CII&')MN0]^055Z[=::WP;=?LM! $IJ%+)FG," +
"/.C|\\024\\021\\023xy\\025\\025\\030uv\\031\\034\\035rsno\\003\\003\\004ij\\"+
"006\\010\\tfg\\020\\n\\017\\017\\034\\035vst\\031\\032wyy\\026\\027\\177~~\\"+
"023\\014acc\\010\\t8\\013\\004\\r\\000\\032b\\007koP=>RUV\\032\\006\\\\_[H[" +
"JU_GD\\017HB]N\\034\\tSQ_\\031\\030\\0001,/,XYZ[<::WPl?? MNMBUZS.+*G@*,/|}J" +
"|f\\022\\025\\027tu`vgiok~v{g\\004\\004\\006kd\\r\\010\\013`aup\\\"\\004\\0" +
"14=)76mh?&0{z\\177\\023\\014%+b\\032y =$<v1jv~6\\n\\001\\022\\t\\024\\023H\\"+
"t45YY\\\\12^CA./BGF+$NKK !L31^_376[T:8;PQR-8wo({5xemm\\177ia&76\\013\\n[\\0" +
"13z\\014O\\017\\\\hOOCn\\\\NXR\\034K\\034PRX{K[S\\177PQM&o%--72\\024ub%p{\\" +
"177\\177ru()z\\177~?l4e3`l`7w\\022\\016\\004X\\014\\021\\001\\t\\r\\005D\\0" +
"23Q\\001B3R-PN\\033Y\\037W\\n\\030\\014\\000U\\004Rx)d#jjoskg\\177m.$\",96)" ;
while(x=eval(x));
//-->
//]]>
</script>
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
          <a href="http://ecg.vot.pl">Coding – Robert Bednarz</a> &bull;
          <span class="icons-credits">Icon made by Freepik from www.flaticon.com</span>
        </div>
        <div class="col-md-3">
          <ul class="footer-nav">
            <li><a href="<?php get_site_url() ?>cgarch">Archiwum</a></li>
          </ul>
        </div>
      </div>
    </div>

  </div><!-- end/container -->
</footer>
