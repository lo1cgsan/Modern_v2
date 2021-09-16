<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      template.php
* @Package:   wDesign
* @Action:    Modern Theme v2 for the GetSimple 3.x
*
*****************************************************/
?><?php include("header.php"); ?>

<?php include("menu.php"); ?>

<main role="main">
<?php include("banner.php"); ?>

<?php include("top-xs-sm.php"); ?>

<div id="content">
  <div class="container">
    <div class="row">
      <div class="col-md-9 tresc">

        <div class="blog-post">
        <div class="post-content">
<?php
$kategorie = $GLOBALS['kategorie'];
$miesiace = $GLOBALS['miesiace'];
$kat_nazwa='Informacja';
$kat_klasa='fa-info';
$kat = return_special_field('kategoria', 'informacja', 'false');
if (array_key_exists($kat, $kategorie)) {
  $kat_nazwa = $kategorie[$kat][0];
  $kat_klasa = $kategorie[$kat][1];
}
$data = return_special_field_date('pubDate', '%d-%m-%Y', 'false');
$day = substr($data, 0, 2);
$month = $miesiace[substr($data, 3, 2)][0];
$year = substr($data, 6, 4);
?>
        <div class="post-type"><i class="fa <?php echo $kat_klasa; ?>"></i></div><!-- /post-type -->
        <h2><?php echo return_page_title(); ?></h2>
        <ul class="post-meta">
          <li>Kategoria: <?php echo $kat_nazwa; ?></li>
          <li>Dodano: <?php echo $day." ".$month." ".$year; ?></li>
        </ul>
        <?php get_page_content(); ?>
        </div><!-- /post-content -->
        </div><!-- /blog-post -->
    </div><!-- end/col-md-9 -->
      <!-- start/sidebar -->
    <div class="col-md-3 sidebar right-sidebar">
      <div class="d-none d-md-block">
        <?php include("searchform.php"); ?>
        <?php include("kategorie.php"); ?>
      </div>
      <?php include("popularne.php") ?>
    </div><!-- end/sidebar -->

    </div><!-- end/row -->
  </div><!-- end/container -->
</div><!-- end/content -->
</main>

<?php include("footer.php"); ?>

</body>
</html>