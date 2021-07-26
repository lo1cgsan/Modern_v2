<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      menu.php
* @Package:   wDesign
* @Action:    Modern Theme for the GetSimple 3.x
*
*****************************************************/
?>
<div class="hidden-header"></div>
  <header class="clearfix">
    <div class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-9">
            <ul>
              <li>
                <span class="cd">
                  <i class="fa fa-map-marker" style="color: #000;"></i>
                  ul. J. Długosza 7, 27-600 Sandomierz</span>
              </li>
              <li>
<script type="text/javascript">
//<![CDATA[
<!--
var x="function f(x){var i,o=\"\",l=x.length;for(i=l-1;i>=0;i--) {try{o+=x.c" +
"harAt(i);}catch(e){}}return o;}f(\")\\\"function f(x,y){var i,o=\\\"\\\\\\\""+
"\\\\,l=x.length;for(i=0;i<l;i++){if(i>(45+y))y*=2;y%=127;o+=String.fromChar" +
"Code(x.charCodeAt(i)^(y++));}return o;}f(\\\"\\\\IALE\\\\\\\\\\\\\\\\W]@\\\\"+
"\\\\033AEQM_WR\\\\\\\\025\\\\\\\\034\\\\\\\\003!a!/%65z\\\\\\\\024k)/l?#\\\\"+
"\\\\023rq:!13k\\\\\\\\013z4;20)1eQ\\\\\\\\r\\\\\\\\r\\\\\\\\020\\\\\\\\005\\"+
"\\\\\\013\\\\\\\\002'\\\\\\\\004\\\\\\\\006[E\\\\\\\\037\\\\\\\\014\\\\\\\\" +
"000\\\\\\\\013\\\\\\\\037\\\\\\\\034\\\\\\\\033\\\\\\\\026\\\\\\\\006\\\\\\" +
"\\017X\\\\\\\\007\\\\\\\\024%XE@\\\\\\\\024^cng}m\\\\\\\\003cb'#c\\\\\\\\\\" +
"\"\\\\$k\\\\\\\\\\\"\\\\&?/'#=+b?\\\\\\\\rps'!/;=d\\\\\\\\006y?220\\\\\\\\0" +
"22[B@TUV\\\\\\\\\\\\\\\\4KTWC\\\\\\\\004POA\\\\\\\\035\\\\\\\\035\\\\\\\\00" +
"0\\\\\\\\025\\\\\\\\033\\\\\\\\0227\\\\\\\\024\\\\\\\\026KU\\\\\\\\017\\\\\\"+
"\\034\\\\\\\\020dmkg{L\\\\\\\\004.rj21_@\\\\\\\\\\\"\\\\+=>%\\\"\\\\,45)\\\""+
"(f};)lo,0(rtsbus.o nruter};)i(tArahc.x=+o{)--i;0=>i;1-l=i(rof}}{)e(hctac};l" +
"=+l;x=+x{yrt{)84=!)31/l(tAedoCrahc.x(elihw;lo=l,htgnel.x=lo,\\\"\\\"=o,i ra" +
"v{)x(f noitcnuf\")"                                                          ;
while(x=eval(x));
//-->
//]]>
</script>
              </li>
              <li><span class="cd"><i class="fa fa-phone" style="color: #000;"></i> (15) 832-52-45</span>
              </li>
            </ul>
          </div>
          <div class="col-3">
            <ul class="float-right">
              <li>
                <a class="cd" href="<?php get_site_url(); ?>cgarch"><i class="fa fa-archive" style="color: #000;"></i><span class="hidden-xs">&nbsp;Archiwum</span></a>
              </li>
              <li>&nbsp;&nbsp;<img src="<?php get_theme_url(); ?>/images/godlo.png" alt="Godło Rezczpospolitej" width="20" height="20"></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  <nav class="navbar navbar-expand-md">
    <div class="container">
          <a class="navbar-brand logoo" href="<?php get_site_url(); ?>">
            <img class="d-inline-block align-text-bottom" id="logoCG" src="<?php get_theme_url(); ?>/images/CG_logo_2019.png" alt="Logo Collegium Gostomianum">
            Collegium Gostomianum
          </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-bars"></span>
          <!-- <span class="navbar-toggler-icon"></span> -->
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ms-auto">
            <?php
            // get_i18n_navigation(return_page_slug());
            $menu_str = getMenu(return_page_slug());
            echo $menu_str;
            ?>
          </ul>
        </div>
    </div>
  </nav>

  <?php //include("top-xs-sm.php"); ?>

  </header>