<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      menu.php
* @Package:   wDesign
* @Action:    Modern Theme for the GetSimple 3.x
*
*****************************************************/
?>
<!-- <div class="hidden-header"></div> -->
  <header class="clearfix">
    <div class="top-bar py-2">
      <div class="container-xl">
        <div class="row">
          <div class="col-9">
            <ul>
              <li>
                <i class="fa fa-map-marker"></i>
                ul. J. Długosza 7, 27-600 Sandomierz |
              </li>
              <li>
                <i class="fa fa-envelope-o"></i>
                <a href="mailto:&#049;&#108;&#111;&#115;&#097;&#110;&#100;&#064;&#108;&#111;&#049;&#046;&#115;&#097;&#110;&#100;&#111;&#109;&#105;&#101;&#114;&#122;&#046;&#112;&#108;">&#049;&#108;&#111;&#115;&#097;&#110;&#100;&#064;&#108;&#111;&#049;&#046;&#115;&#097;&#110;&#100;&#111;&#109;&#105;&#101;&#114;&#122;&#046;&#112;&#108;</a> |
              </li>
              <li>
                <i class="fa fa-phone"></i>
                (15) 832-52-45
              </li>
            </ul>
          </div>
          <div class="col-3">
            <ul class="d-flex justify-content-end">
              <li>
<?php
  if (str_contains(get_site_url(false), 'cgarch')) {
?>
  <a href="<?php echo(substr(get_site_url(false), 0, -7)); ?>"><i class="fa fa-university"></i><span class="d-none d-sm-inline-flex">&nbsp;Strona główna</span></a>
<?php
  } else {
?>
  <a href="<?php get_site_url(); ?>cgarch"><i class="fa fa-archive"></i><span class="d-none d-sm-inline-flex">&nbsp;Archiwum</span></a>
<?php
  }
?>
              </li>
              <li>&nbsp;&nbsp;<img src="<?php get_theme_url(); ?>/images/godlo.png" alt="Godło Rezczpospolitej" width="20" height="20"></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  <nav class="navbar navbar-expand-md">
    <div class="container-xl">

          <a class="navbar-brand" href="<?php get_site_url(); ?>">
            <img id="logoCG" src="<?php get_theme_url(); ?>/images/CG_logo_2019.png" alt="Logo Collegium Gostomianum">
          </a>
          <div class="mt-auto">
            <a class="navbar-brand d-none d-lg-block logoo" href="<?php get_site_url(); ?>">I Liceum Ogólnokształcące<br>Collegium Gostomianum</a>
          </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Przełącz nawigację">
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

  </header>