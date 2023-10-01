<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      template.php
* @Package:   wDesign
* @Action:    Modern Theme for the GetSimple 3.x
*
*****************************************************/
?><?php include("header.php"); ?>

<?php include("menu.php"); ?>

<main role="main">
<?php include("banner.php"); ?>

<?php include("top-xs-sm.php"); ?>

<div id="content">
  <div class="container ">
    <div class="row">
    <div class="col-md-9">
    <div class="hr1" style="margin-bottom:15px;"></div>
        <div class="row latest-posts-classic">
        <h1 class="classic-title"><span><?php get_page_title(); ?></span></h1>
<?php
    get_page_content();
?>

    </div><!-- end/row latest-posts-classic -->

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

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
  <script type="text/javascript" src="<?php get_theme_url(); ?>/assets/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="<?php get_theme_url(); ?>/assets/js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="<?php get_theme_url(); ?>/js/script.js"></script>
</body>
</html>