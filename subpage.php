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
    <div class="col-sm-12 col-md-9 tresc">

      <div class="panel-body faq">
<?php
  get_page_content();

$submenu = return_i18n_menu_data(return_page_slug(), $minlevel=1, $maxlevel=1, $show=I18N_SHOW_PAGES);

foreach($submenu as $strona) {
  echo '<div class="faq-item">';
  echo '<div class="faq-title">';
  if (strpos($strona['title'],'[cg]')) {
    echo '<span class="fa fa-angle-down testh"></span>'.substr($strona['title'], 0, -4).'</div>';
    echo '<div class="faq-text">';
    getPageContent($strona['url']);
    echo '</div>';
  } else
    echo '<a href="'.$strona['url'].'"><span class="fa fa-angle-right"></span>'.$strona['menu'].'</a></div>';
  echo '</div>
  ';
}
?>
      </div><!-- end/panel-body -->

    </div><!-- /tresc -->
    <!-- start/sidebar -->
    <div class="col-sm-12 col-md-3 sidebar right-sidebar">
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
