<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      banner.php
* @Package:   wDesign
* @Action:    Modern Theme for the GetSimple 3.x
*
*****************************************************/
?>
<div class="page-banner">
  <div class="container-lg">
    <div class="row">
      <div class="col-xs-12 col-sm-8">
        <h1 class="tytul uppercase">
          <strong><?php get_page_title(); ?></strong>
        </h1>
<?php
  $tytul=return_page_title();
  if (!strpos($tytul, "404!")) echo '<p>Wszystkie informacje o naszej szkole</p>';
  else echo '<p>Nie ma takiego zasobu!</p>';
?>
        <ul class="breadcrumbs">
          <li><a href="<?php get_site_url(); ?>">Strona Główna</a></li>
<?php
  $paths=return_i18n_breadcrumbs(return_page_slug());
  foreach ($paths as $path) {
    if ($path['url'] == 'index') continue;
    echo '<li><a href="'.$path['url'].'">'.$path['menu'].'</a></li>';
  }
?>
        </ul>
      </div>
      <div class="col-sm-4 d-none d-sm-block">
<?php include("certyfikaty_banner.php"); ?>
      </div>
    </div>
  </div>
</div>