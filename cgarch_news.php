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
    <!-- <div class="hr1" style="margin-bottom:15px;"></div> -->
        <div class="row latest-posts-classic">
        <!-- <h1 class="classic-title"><span><?php get_page_title(); ?></span></h1> -->
<?php
$addTags='';
if (isset($_GET['addTags'])) {
  $addTags = trim($_GET['addTags']);
  get_i18n_search_results(array('tags'=>return_page_slug(),'addTags'=>$addTags,'words'=>'','max'=>10,'numWords'=>15,'HEADER'=>null, 'live'=>0, 'ajax'=>0, 'showPaging'=>1));
} else {
  get_page_content();
}
?>

    </div><!-- end/row latest-posts-classic -->

    </div><!-- end/col-md-9 -->
    <!-- start/sidebar -->
    <div class="col-md-3 sidebar right-sidebar">
      <div class="d-none d-md-block">
        <?php include("searchform.php"); ?>
      </div>
      <?php include("kategorie_arch.php"); ?>
      <?php include("popularne.php") ?>
    </div><!-- end/sidebar -->

  </div><!-- end/row -->
</div><!-- end/container -->
</div><!-- end/content -->
</main>

<?php include("footer.php"); ?>

</body>
</html>